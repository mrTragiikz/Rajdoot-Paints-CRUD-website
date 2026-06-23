// --- Intro preloader: show on first load + refresh, skip on page navigation ---
(function () {
    const loader = document.getElementById('intro-loader');
    if (!loader) return;

    // If navigated here from another page (not a refresh), skip the intro
    const isNavigation = sessionStorage.getItem('introSeen') === 'navigated';
    if (isNavigation) {
        loader.style.display = 'none';
        document.body.classList.remove('intro-active');
        return;
    }

    const MIN_DISPLAY = 1800;
    const start = Date.now();

    function dismiss() {
        const elapsed = Date.now() - start;
        const wait = Math.max(0, MIN_DISPLAY - elapsed);
        setTimeout(() => {
            loader.classList.add('intro-hide');
            document.body.classList.remove('intro-active');
            setTimeout(() => loader.remove(), 850);
        }, wait);
    }

    if (document.readyState === 'complete') {
        dismiss();
    } else {
        window.addEventListener('load', dismiss);
    }
    setTimeout(dismiss, 6000);

    // Clear the flag now (so refresh shows intro again),
    // then set it just before navigating away
    sessionStorage.removeItem('introSeen');
    document.addEventListener('click', (e) => {
        const a = e.target.closest('a');
        if (a && a.href && a.hostname === location.hostname && !a.target) {
            sessionStorage.setItem('introSeen', 'navigated');
        }
    });
})();

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const dropdownItems = document.querySelectorAll('.nav-item.has-dropdown');

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const mobileBreakpoint = 1024;

    const isMobile = () => window.innerWidth <= mobileBreakpoint;


    // --- Right-side drawer (mobile) ---
    const navDrawer   = document.getElementById('navDrawer');
    const navBackdrop = document.getElementById('navBackdrop');
    const drawerClose = document.getElementById('drawerClose');

    function openDrawer() {
        navDrawer?.classList.add('open');
        navBackdrop?.classList.add('open');
        mobileToggle?.classList.add('active');
        mobileToggle?.setAttribute('aria-expanded', 'true');
        document.body.classList.add('drawer-open');
    }

    function closeDrawer() {
        navDrawer?.classList.remove('open');
        navBackdrop?.classList.remove('open');
        mobileToggle?.classList.remove('active');
        mobileToggle?.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('drawer-open');
    }

    function closeMenu() {
        if (!navbar) return;
        navbar.classList.remove('menu-open');
        closeDrawer();
        dropdownItems.forEach((item) => {
            item.classList.remove('dropdown-open');
            item.querySelector('.nav-link')?.setAttribute('aria-expanded', 'false');
        });
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            if (!isMobile()) return; // ignore on desktop
            if (navDrawer?.classList.contains('open')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });
    }

    if (isMobile()) {
        drawerClose?.addEventListener('click', closeDrawer);
        navBackdrop?.addEventListener('click', closeDrawer);
        navDrawer?.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeDrawer);
        });
    }

    window.addEventListener('resize', () => {
        if (!isMobile()) closeDrawer();
    });

    dropdownItems.forEach((item) => {
        const link = item.querySelector('.nav-link');
        link?.addEventListener('click', (e) => {
            if (!isMobile() || !navbar.classList.contains('menu-open')) return;
            e.preventDefault();
            const isOpen = item.classList.contains('dropdown-open');
            dropdownItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.classList.remove('dropdown-open');
                    otherItem.querySelector('.nav-link')?.setAttribute('aria-expanded', 'false');
                }
            });
            if (isOpen) {
                item.classList.remove('dropdown-open');
                link.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('dropdown-open');
                link.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // --- Scroll Animations for Products Section ---
    const headerLeft = document.querySelector('.products-header-left');
    const headerRight = document.querySelector('.products-header-right');
    const productCards = document.querySelectorAll('.product-card');

    if (!prefersReducedMotion) {
        if (headerLeft) headerLeft.classList.add('anim-slide-left');
        if (headerRight) headerRight.classList.add('anim-slide-right');
        productCards.forEach((card, index) => {
            card.classList.add('anim-slide-right-card');
            card.style.transitionDelay = `${index * 0.15}s`;
        });

        const productObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        if (headerLeft) productObserver.observe(headerLeft);
        if (headerRight) productObserver.observe(headerRight);
        productCards.forEach(card => productObserver.observe(card));

    }

    // --- Family Banner Animations (mobile: directional slide-in per section) ---
    if (isMobile() && !prefersReducedMotion) {
        const fbSections = document.querySelectorAll('.family-banner-section');

        fbSections.forEach((section, idx) => {
            const isReverse = section.classList.contains('reverse');
            // 1st banner: image from right, text from left
            // 2nd banner (reverse): image from left, text from right
            const imgDir  = isReverse ? 'fb-from-left'  : 'fb-from-right';
            const textDir = isReverse ? 'fb-from-right' : 'fb-from-left';

            const imgWrap  = section.querySelector('.fb-img-pan-wrap');
            const textEls  = section.querySelectorAll('.fb-logo-wrap, .fb-title, .fb-desc, .fb-features-marquee-wrap, .fb-explore-btn');
            const bottomBar = section.querySelector('.fb-bottom-bar');

            if (imgWrap)  imgWrap.classList.add(imgDir);
            textEls.forEach(el => el.classList.add(textDir));
            if (bottomBar) bottomBar.classList.add('fb-from-bottom');

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fb-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.10, rootMargin: '0px 0px -30px 0px' });

            if (imgWrap) observer.observe(imgWrap);
            textEls.forEach(el => observer.observe(el));
            if (bottomBar) observer.observe(bottomBar);
        });
    }

    // --- Promise Section Animations (mobile) ---
    if (isMobile() && !prefersReducedMotion) {
        const psTargets = document.querySelectorAll(
            '.ps-family-img, .ps-tagline-wrap, .ps-title, .ps-desc, .ps-explore-btn, .ps-bottom-card, .ps-feature-item'
        );
        const psObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ps-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.10, rootMargin: '0px 0px -30px 0px' });
        psTargets.forEach(el => psObserver.observe(el));
    }

    // --- Family Banner Animations (desktop: GSAP) ---
    const familyBanners = document.querySelectorAll('.family-banner-section');
    if (familyBanners.length > 0 && !isMobile() && typeof gsap !== 'undefined' && !prefersReducedMotion) {
        gsap.registerPlugin(ScrollTrigger);

        familyBanners.forEach((familyBanner) => {
            const fbTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: familyBanner,
                    start: "top 75%",
                    toggleActions: "play none none none"
                }
            });

            // Make sure elements exist before animating them
            const img = familyBanner.querySelector('.fb-family-img');
            const logo = familyBanner.querySelector('.fb-logo-wrap');
            const title = familyBanner.querySelector('.fb-title');
            const desc = familyBanner.querySelector('.fb-desc');
            const features = familyBanner.querySelectorAll('.fb-feature-item');
            const btn = familyBanner.querySelector('.fb-explore-btn');
            const bottomBar = familyBanner.querySelector('.fb-bottom-bar');

            if (img) fbTimeline.fromTo(img, { opacity: 0, x: -50 }, { opacity: 1, x: 0, duration: 1, ease: "power3.out" }, 0);
            if (logo) fbTimeline.fromTo(logo, { opacity: 0, x: 30 }, { opacity: 1, x: 0, duration: 0.8, ease: "power2.out" }, 0.4);
            if (title) fbTimeline.fromTo(title, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 0.6);
            if (desc) fbTimeline.fromTo(desc, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 0.8);
            if (features.length) fbTimeline.fromTo(features, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.6, stagger: 0.1, ease: "back.out(1.5)" }, 1.0);
            if (btn) fbTimeline.fromTo(btn, { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, duration: 0.6, ease: "back.out(1.5)" }, 1.4);
            if (bottomBar) fbTimeline.fromTo(bottomBar, { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, 1.2);
        });

        // Shining Star Effect Loop
        const shineLoop = gsap.timeline({ repeat: -1, repeatDelay: 2 });
        shineLoop.to('.fb-icon-circle i', {
            scale: 1.25,
            rotation: 15,
            textShadow: "0 0 15px rgba(185,139,44,0.8)",
            color: "#d4af37",
            duration: 0.4,
            stagger: 0.2,
            yoyo: true,
            repeat: 1,
            ease: "power2.inOut"
        });
        // Bottom Bar Icons Glowing Effect Loop
        const bottomGlowLoop = gsap.timeline({ repeat: -1, repeatDelay: 1.5 });
        bottomGlowLoop.to('.fb-b-icon i', {
            scale: 1.15,
            textShadow: "0 0 12px rgba(74, 32, 99, 0.8)",
            color: "#6c328e", // Slightly brighter purple
            duration: 0.6,
            stagger: 0.15,
            yoyo: true,
            repeat: 1,
            ease: "power1.inOut"
        }, "+=1"); // Start after a short delay
    }

    // --- Promise Section Animations ---
    const promiseSection = document.querySelector('.promise-section');
    if (promiseSection && typeof gsap !== 'undefined' && !prefersReducedMotion) {
        gsap.registerPlugin(ScrollTrigger);

        const psTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: promiseSection,
                start: "top 75%",
                toggleActions: "play none none none"
            }
        });

        // Top content animations
        psTimeline.fromTo('.ps-family-img',
            { opacity: 0, scale: 0.95 },
            { opacity: 1, scale: 1, duration: 1, ease: "power3.out" }, 0
        )
            .fromTo('.ps-tagline-wrap',
                { opacity: 0, x: 30 },
                { opacity: 1, x: 0, duration: 0.8, ease: "power2.out" }, 0.2
            )
            .fromTo('.ps-title',
                { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 0.4
            )
            .fromTo('.ps-desc',
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 0.6
            )
            .fromTo('.ps-explore-btn',
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6, ease: "back.out(1.5)" }, 0.8
            );

        // Bottom card animations
        const psCardTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '.ps-bottom-card',
                start: "top 85%",
                toggleActions: "play none none none"
            }
        });

        psCardTimeline.fromTo('.ps-bottom-card',
            { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, 0
        )
            .fromTo('.ps-card-tagline-wrap',
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" }, 0.3
            )
            .fromTo('.ps-feature-item',
                { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.6, stagger: 0.1, ease: "back.out(1.2)" }, 0.5
            )
            .fromTo('.ps-divider',
                { opacity: 0, scaleY: 0 },
                { opacity: 1, scaleY: 1, duration: 0.4, stagger: 0.1, ease: "power2.inOut" }, 0.7
            )
            .fromTo('.ps-stats-bar',
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" }, 1.0
            )
            .fromTo('.ps-stat-item',
                { opacity: 0, scale: 0.8 },
                { opacity: 1, scale: 1, duration: 0.5, stagger: 0.1, ease: "back.out(1.5)" }, 1.2
            );

        // --- Fun Game-like Interactive Animations ---

        // 1. Number Counter Animation
        const statNumbers = document.querySelectorAll('.ps-stat-text strong');
        statNumbers.forEach(el => {
            let text = el.innerText;
            if (text.includes('+')) {
                let targetNum = parseInt(text.replace('+', ''));
                if (!isNaN(targetNum)) {
                    // Hide original text initially
                    el.innerText = '0+';
                    let obj = { val: 0 };
                    psCardTimeline.to(obj, {
                        val: targetNum,
                        duration: 2.5,
                        ease: "power3.out",
                        onUpdate: function () {
                            el.innerText = Math.floor(obj.val) + '+';
                        }
                    }, 1.2);
                }
            }
        });

    }

    // --- Pro Level Swiper Slideshow ---
    if (typeof Swiper !== 'undefined' && document.querySelector('.pro-slideshow')) {
        const swiper = new Swiper('.pro-slideshow', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            speed: 800,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 30,
                stretch: 0,
                depth: 150,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
        });
    }

    // --- Scroll to top button ---
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        }, { passive: true });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- Map tap-to-activate (prevents iframe hijacking page scroll on mobile) ---
    if (isMobile()) {
        const mapContainer = document.querySelector('.map-container');
        if (mapContainer) {
            mapContainer.addEventListener('touchstart', function (e) {
                if (!this.classList.contains('map-active')) {
                    e.preventDefault();
                    this.classList.add('map-active');
                }
            }, { passive: false });
            document.addEventListener('touchstart', function (e) {
                if (mapContainer.classList.contains('map-active') && !mapContainer.contains(e.target)) {
                    mapContainer.classList.remove('map-active');
                }
            }, { passive: true });
            window.addEventListener('scroll', function () {
                mapContainer.classList.remove('map-active');
            }, { passive: true });
        }
    }

    // --- Moments Slideshow mobile scroll animation ---
    if (isMobile()) {
        const ssHeader = document.querySelector('.slideshow-header');
        const ssSwiper = document.querySelector('.pro-slideshow');
        const ssObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ss-visible');
                    ssObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        if (ssHeader) ssObserver.observe(ssHeader);
        if (ssSwiper) ssObserver.observe(ssSwiper);
    }

    // --- Footer Animations ---
    const footerAnimates = document.querySelectorAll('.animate-footer');
    if (footerAnimates.length > 0 && typeof gsap !== 'undefined') {
        footerAnimates.forEach(el => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: '.site-footer',
                    start: 'top 90%',
                    toggleClass: { targets: el, className: 'is-visible' },
                    once: true
                }
            });
        });
    }

    // --- Location Cards slide-in animation ---
    const locItems = document.querySelectorAll('.loc-anim');
    if (locItems.length > 0) {
        const locObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loc-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2, rootMargin: '0px 0px -30px 0px' });
        locItems.forEach(item => locObserver.observe(item));
    }

    // --- Visualize Your Space scroll reveal ---
    const visualizeSection = document.querySelector('.visualize-section');
    if (visualizeSection) {
        const visualizeObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
        visualizeObserver.observe(visualizeSection);
    }

    // --- Product Page Tabs ---
    const tabBtns = document.querySelectorAll('.prod-tab-btn');
    const tabPanels = document.querySelectorAll('.prod-tab-panel');

    function switchTab(key) {
        tabBtns.forEach(b => b.classList.remove('active'));
        tabPanels.forEach(p => p.classList.remove('active'));
        const btn   = document.querySelector(`.prod-tab-btn[data-tab="${key}"]`);
        const panel = document.querySelector(`.prod-tab-panel[data-panel="${key}"]`);
        if (btn)   btn.classList.add('active');
        if (panel) panel.classList.add('active');
    }

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => switchTab(btn.dataset.tab));
    });

    // Mobile custom dropdown
    const mobileSelectWrap = document.getElementById('prodMobileSelectWrap');

    if (mobileSelectWrap) {
        const mobileSelected = document.getElementById('prodMobileSelected');
        const dropdownItems  = mobileSelectWrap.querySelectorAll('.prod-dropdown-item');

        mobileSelected.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileSelectWrap.classList.toggle('open');
        });

        dropdownItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const val      = item.getAttribute('data-value');
                const label    = item.querySelector('.prod-drop-label').textContent.trim();
                const iconHTML = item.querySelector('.prod-dropdown-icon').innerHTML;

                // mark active in list
                dropdownItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');

                // update trigger button
                mobileSelected.querySelector('.prod-selected-icon').innerHTML = iconHTML;
                mobileSelected.querySelector('.prod-selected-label').textContent = label;

                // close
                mobileSelectWrap.classList.remove('open');

                // switch panel directly
                tabPanels.forEach(p => p.classList.remove('active'));
                const target = document.querySelector(`.prod-tab-panel[data-panel="${val}"]`);
                if (target) target.classList.add('active');
            });
        });

        document.addEventListener('click', (e) => {
            if (!mobileSelectWrap.contains(e.target)) {
                mobileSelectWrap.classList.remove('open');
            }
        });
    }

    // Auto-activate tab from URL ?tab= param, default to 'all'
    const urlTab = new URLSearchParams(window.location.search).get('tab') || 'all';
    switchTab(urlTab);

    // sync mobile dropdown label to active tab
    if (mobileSelectWrap && urlTab !== 'all') {
        const matchItem = mobileSelectWrap.querySelector(`.prod-dropdown-item[data-value="${urlTab}"]`);
        if (matchItem) {
            const allItems = mobileSelectWrap.querySelectorAll('.prod-dropdown-item');
            allItems.forEach(i => i.classList.remove('active'));
            matchItem.classList.add('active');
            const mSel = document.getElementById('prodMobileSelected');
            if (mSel) {
                mSel.querySelector('.prod-selected-icon').innerHTML = matchItem.querySelector('.prod-dropdown-icon').innerHTML;
                mSel.querySelector('.prod-selected-label').textContent = matchItem.querySelector('.prod-drop-label').textContent.trim();
            }
        }
    }

    // --- Product Detail Modal ---
    const modalOverlay  = document.getElementById('prodModal');
    const modalInner    = document.getElementById('prodModalInner');
    const modalClose    = document.getElementById('prodModalClose');
    const modalImg      = document.getElementById('prodModalImg');
    const modalImgSide  = document.getElementById('prodModalImgSide');
    const modalBadge    = document.getElementById('prodModalBadge');
    const modalCategory = document.getElementById('prodModalCategory');
    const modalTitle    = document.getElementById('prodModalTitle');
    const modalDesc     = document.getElementById('prodModalDesc');
    const modalFeatures = document.getElementById('prodModalFeatures');

    function openModal(card) {
        const title    = card.dataset.title;
        const desc     = card.dataset.desc;
        const image    = card.dataset.image;
        const bg       = card.dataset.bg;
        const badge    = card.dataset.badge;
        const category = card.dataset.category;
        const color    = card.dataset.color;
        const features = JSON.parse(card.dataset.features);

        modalInner.style.setProperty('--theme-color', color);
        modalImg.src = image;
        modalImg.alt = title;
        modalImgSide.style.backgroundImage = `url('${bg}')`;
        modalCategory.textContent = category;
        modalTitle.textContent = title;
        modalDesc.textContent = desc;

        if (badge) {
            modalBadge.textContent = badge;
            modalBadge.style.display = '';
        } else {
            modalBadge.style.display = 'none';
        }

        modalFeatures.innerHTML = features.map(f => `
            <div class="prod-modal-feature-row">
                <i class="ph-light ${f.icon}"></i>
                <span>${f.text.replace('<br>', ' ')}</span>
            </div>
        `).join('');

        modalOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.prod-open-modal');
        if (btn) {
            e.preventDefault();
            openModal(btn.closest('.prod-page-card'));
        }
    });

    if (modalClose) modalClose.addEventListener('click', closeModal);
    if (modalOverlay) modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) closeModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });

    // --- Auto-scrolling marquee: idles on its own, draggable by hand, never blocks page scroll ---
    function initAutoCarousel(wrapSelector, trackSelector, speed) {
        const wrap = document.querySelector(wrapSelector);
        const track = document.querySelector(trackSelector);
        if (!wrap || !track || !window.matchMedia('(max-width: 1024px)').matches) return;

        const SPEED = speed; // px per ms (idle auto-scroll speed)
        let offset = 0;
        let renderedOffset = null;
        let halfWidth = 0;
        let dragging = false;
        let dragStartX = 0;
        let dragStartOffset = 0;
        let lastTime = null;
        let velocity = SPEED;      // px per ms, carries momentum after release
        let lastDragX = 0;
        let lastDragTime = 0;

        function measure() {
            if (dragging) return; // avoid shifting the modulo space mid-drag
            // measure exactly one set's width (first half of children) so the
            // wrap point lands precisely at the duplicate seam, not skewed by
            // the track's own padding being counted in scrollWidth/2.
            const children = track.children;
            const setLength = children.length / 2;
            if (setLength < 1) return;
            const firstCard = children[0];
            const lastCardOfFirstSet = children[setLength - 1];
            const newHalfWidth = (lastCardOfFirstSet.offsetLeft + lastCardOfFirstSet.offsetWidth) - firstCard.offsetLeft;
            if (newHalfWidth > 0) {
                halfWidth = newHalfWidth;
                offset = wrapOffset(offset);
            }
        }

        function wrapOffset(v) {
            if (halfWidth <= 0) return v;
            return ((v % halfWidth) + halfWidth) % halfWidth;
        }

        function render() {
            const rounded = Math.round(offset);
            if (renderedOffset === rounded) return;
            renderedOffset = rounded;
            // whole-pixel offsets only — fractional translate3d values force
            // subpixel GPU compositing on mobile, which blurs the images.
            track.style.transform = `translate3d(${-rounded}px, 0, 0)`;
        }

        function tick(time) {
            if (lastTime === null) lastTime = time;
            const dt = time - lastTime;
            lastTime = time;

            if (!dragging) {
                // ease velocity back toward the steady auto-scroll speed (momentum decay)
                velocity += (SPEED - velocity) * 0.04;
                offset += velocity * dt;
                offset = wrapOffset(offset);
                render();
            }
            requestAnimationFrame(tick);
        }

        let touchStartX = 0;
        let touchStartY = 0;
        let touchStartTime = 0;
        let touchIntent = null; // 'horizontal' | 'vertical' | null

        function onDragStart(clientX, time) {
            dragging = true;
            dragStartX = clientX;
            dragStartOffset = offset;
            lastDragX = clientX;
            lastDragTime = time;
            track.classList.add('dragging');
        }

        const MAX_VELOCITY = 3; // px per ms — caps flick momentum so it can't fling off-screen

        function onDragMove(clientX, time) {
            if (!dragging) return;
            offset = wrapOffset(dragStartOffset - (clientX - dragStartX));
            render();
            const dt = time - lastDragTime;
            if (dt > 0) {
                velocity = Math.max(-MAX_VELOCITY, Math.min(MAX_VELOCITY, -(clientX - lastDragX) / dt));
            }
            lastDragX = clientX;
            lastDragTime = time;
        }

        function onDragEnd() {
            if (!dragging) return;
            dragging = false;
            lastTime = null;
            touchIntent = null;
            track.classList.remove('dragging');
        }

        wrap.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            touchStartY = e.touches[0].clientY;
            touchStartTime = e.timeStamp;
            touchIntent = null;
        }, { passive: true });
        wrap.addEventListener('touchmove', (e) => {
            const touch = e.touches[0];
            if (touchIntent === null) {
                const dx = touch.clientX - touchStartX;
                const dy = touch.clientY - touchStartY;
                if (Math.abs(dx) < 6 && Math.abs(dy) < 6) return; // wait for a real move
                touchIntent = Math.abs(dx) > Math.abs(dy) ? 'horizontal' : 'vertical';
                if (touchIntent === 'horizontal') {
                    onDragStart(touchStartX, touchStartTime);
                } else {
                    return; // let the browser handle vertical scroll natively
                }
            }
            if (touchIntent !== 'horizontal') return;
            onDragMove(touch.clientX, e.timeStamp);
            e.preventDefault();
        }, { passive: false });
        wrap.addEventListener('touchend', onDragEnd);
        wrap.addEventListener('touchcancel', onDragEnd);
        window.addEventListener('resize', measure);
        measure();

        // images load async and change track width — re-measure once they're ready
        const images = track.querySelectorAll('img');
        let pending = 0;
        images.forEach((img) => {
            if (img.complete) return;
            pending++;
            img.addEventListener('load', () => {
                pending--;
                measure();
            }, { once: true });
        });
        if (pending > 0) {
            // safety net in case some image events never fire
            setTimeout(measure, 1200);
        }

        requestAnimationFrame(tick);
    }

    initAutoCarousel('.products-carousel-wrap', '.products-grid.products-marquee', 0.035);
    initAutoCarousel('.visualize-container', '.visualize-grid', 0.025);

    // --- Visualize card modal (mobile): tap a card to see image + description ---
    const vModal     = document.getElementById('visualizeModal');
    const vModalClose = document.getElementById('visualizeModalClose');
    const vModalImg   = document.getElementById('visualizeModalImg');
    const vModalLabel = document.getElementById('visualizeModalLabel');
    const vModalDesc  = document.getElementById('visualizeModalDesc');
    const vModalSwatch = document.getElementById('visualizeModalSwatch');

    if (vModal && window.matchMedia('(max-width: 1024px)').matches) {
        let vScrollY = 0;

        function openVisualizeModal(card) {
            vModalImg.src = card.dataset.img || '';
            vModalImg.alt = card.dataset.alt || '';
            vModalLabel.textContent = card.dataset.label || '';
            vModalDesc.textContent = card.dataset.desc || '';
            vModalSwatch.style.background = card.dataset.color || '#c49a62';
            vModal.classList.add('open');
            vModal.setAttribute('aria-hidden', 'false');
            vScrollY = window.scrollY;
            document.documentElement.style.overflow = 'hidden';
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = `-${vScrollY}px`;
            document.body.style.left = '0';
            document.body.style.right = '0';
            document.body.style.width = '100%';
        }

        function closeVisualizeModal() {
            vModal.classList.remove('open');
            vModal.setAttribute('aria-hidden', 'true');
            document.documentElement.style.overflow = '';
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            document.body.style.width = '';
            window.scrollTo(0, vScrollY);
        }

        document.querySelectorAll('.visualize-card').forEach((card) => {
            card.addEventListener('click', () => openVisualizeModal(card));
        });

        vModalClose.addEventListener('click', closeVisualizeModal);
        vModal.addEventListener('click', (e) => {
            if (e.target === vModal) closeVisualizeModal();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeVisualizeModal();
        });
    }

});
