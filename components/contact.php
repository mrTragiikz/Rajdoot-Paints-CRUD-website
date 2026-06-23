<section class="ct-page-section" id="contact">
<div class="ct-container">

    <!-- Form state -->
    <div class="ct-form-wrap" id="ctFormWrap">
        <div class="ct-form-header">
            <span class="ct-eyebrow">Get In Touch</span>
            <h1 class="ct-title">Contact Rajdoot Paints</h1>
            <p class="ct-sub">Have a question about our products, dealers, or anything else? Send us a message and our team will get back to you shortly.</p>
        </div>

        <form class="ct-form" id="ctForm">
            <div class="ct-form-section">
                <h3 class="ct-section-title"><i class="ph-light ph-user"></i> Your Details</h3>
                <div class="ct-field">
                    <label for="ctName">Full Name <span>*</span></label>
                    <input type="text" id="ctName" name="name" placeholder="e.g. Suresh Shrestha" required>
                </div>
                <div class="ct-field-row">
                    <div class="ct-field">
                        <label for="ctPhone">Phone Number <span>*</span></label>
                        <input type="tel" id="ctPhone" name="phone" placeholder="e.g. +977-98XXXXXXXX" required>
                    </div>
                    <div class="ct-field">
                        <label for="ctEmail">Email Address <span>*</span></label>
                        <input type="email" id="ctEmail" name="email" placeholder="e.g. you@example.com" required>
                    </div>
                </div>
                <div class="ct-field">
                    <label for="ctProvince">Where are you from? <span>*</span></label>
                    <select id="ctProvince" name="province" required>
                        <option value="" disabled selected>Select your province</option>
                        <option value="Koshi">Koshi</option>
                        <option value="Madhesh">Madhesh</option>
                        <option value="Bagmati">Bagmati</option>
                        <option value="Gandaki">Gandaki</option>
                        <option value="Lumbini">Lumbini</option>
                        <option value="Karnali">Karnali</option>
                        <option value="Sudurpashchim">Sudurpashchim</option>
                    </select>
                </div>
            </div>

            <div class="ct-form-section">
                <h3 class="ct-section-title"><i class="ph-light ph-chat-circle-dots"></i> Inquiry Type</h3>
                <div class="ct-field">
                    <label>What is this regarding? <span>*</span></label>
                    <div class="ct-inquiry-options" id="ctInquiryOptions">
                        <label class="ct-inquiry-option">
                            <input type="radio" name="inquiry_type" value="dealer" required>
                            <span class="ct-inquiry-icon"><i class="ph-light ph-storefront"></i></span>
                            <span class="ct-inquiry-label">Dealer</span>
                        </label>
                        <label class="ct-inquiry-option">
                            <input type="radio" name="inquiry_type" value="products" required>
                            <span class="ct-inquiry-icon"><i class="ph-light ph-paint-bucket"></i></span>
                            <span class="ct-inquiry-label">Products</span>
                        </label>
                        <label class="ct-inquiry-option">
                            <input type="radio" name="inquiry_type" value="other" required>
                            <span class="ct-inquiry-icon"><i class="ph-light ph-dots-three-circle"></i></span>
                            <span class="ct-inquiry-label">Other</span>
                        </label>
                    </div>
                </div>

                <div class="ct-field ct-other-field" id="ctOtherField" hidden>
                    <label for="ctOtherText">Tell us more <span>*</span></label>
                    <textarea id="ctOtherText" name="other_detail" placeholder="Please describe your inquiry" rows="3"></textarea>
                </div>
            </div>

            <div class="ct-btn-row">
                <a href="index.php" class="ct-cancel">Cancel</a>
                <button type="submit" class="ct-submit">Submit Inquiry</button>
            </div>
        </form>
    </div>

</div>
</section>

<!-- SUCCESS MODAL -->
<div class="ct-modal-overlay" id="ctSuccessModal" aria-hidden="true">
    <div class="ct-modal">
        <button class="ct-modal-close" id="ctModalClose" aria-label="Close">
            <i class="ph-bold ph-x"></i>
        </button>
        <div class="ct-modal-icon"><i class="bi bi-check-lg"></i></div>
        <h2 class="ct-modal-title" id="ctModalTitle">Thank You!</h2>
        <p class="ct-modal-desc" id="ctModalDesc">Thank you for reaching out. Our team will review your inquiry and contact you as soon as possible.</p>
        <a href="index.php" class="ct-modal-btn">Back to Home</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('ctForm');
    const otherField = document.getElementById('ctOtherField');
    const otherText = document.getElementById('ctOtherText');
    const inquiryRadios = document.querySelectorAll('input[name="inquiry_type"]');

    const modal = document.getElementById('ctSuccessModal');
    const modalClose = document.getElementById('ctModalClose');
    const modalTitle = document.getElementById('ctModalTitle');
    const modalDesc = document.getElementById('ctModalDesc');

    inquiryRadios.forEach((radio) => {
        radio.addEventListener('change', () => {
            const isOther = radio.value === 'other' && radio.checked;
            if (isOther) {
                otherField.hidden = false;
                otherText.required = true;
            } else if (radio.checked) {
                otherField.hidden = true;
                otherText.required = false;
                otherText.value = '';
            }
        });
    });

    let ctScrollY = 0;

    function openModal() {
        ctScrollY = window.scrollY;
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${ctScrollY}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';
    }

    function closeModal() {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
        document.documentElement.style.overflow = '';
        document.body.style.overflow = '';
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';
        window.scrollTo(0, ctScrollY);
    }

    const submitBtn = form.querySelector('.ct-submit');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const selectedType = form.querySelector('input[name="inquiry_type"]:checked');
        const type = selectedType ? selectedType.value : '';

        const originalLabel = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.classList.add('btn-loading');
        submitBtn.textContent = 'Submitting...';

        try {
            const res = await fetch('contact-submit.php', {
                method: 'POST',
                body: new FormData(form)
            });
            const data = await res.json();

            if (data.ok) {
                if (type === 'dealer') {
                    modalTitle.textContent = 'Thank You for Your Dealer Inquiry!';
                    modalDesc.textContent = 'We have received your dealer inquiry. Our team will respond to you as soon as possible.';
                } else {
                    modalTitle.textContent = 'Thank You for Contacting Us!';
                    modalDesc.textContent = 'We have received your inquiry. Our team will review it and get back to you as soon as possible.';
                }
                openModal();
                form.reset();
            } else {
                alert(data.message || 'Something went wrong. Please try again.');
            }
        } catch (err) {
            alert('Network error. Please check your connection and try again.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = originalLabel;
        }
    });

    modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
    });
});
</script>
