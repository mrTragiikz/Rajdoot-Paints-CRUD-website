<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Detail | Rajdoot Paints</title>

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap"></noscript>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css"></noscript>

    <link rel="stylesheet" href="css/pc/navbar.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/navbar.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/event-detail.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/event-detail.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/footer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/footer.css" media="screen and (max-width: 1024px)">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<?php
require_once __DIR__ . '/data/events.php';

$slug = $_GET['e'] ?? '';
$e = $allEvents[$slug] ?? null;

if (!$e) {
    header('Location: event.php');
    exit;
}
?>

<main style="padding-top: 80px;">
<div class="ed-page" style="--theme-color: <?php echo $e['theme_color']; ?>">

    <!-- Back breadcrumb -->
    <div class="ed-breadcrumb">
        <div class="ed-breadcrumb-inner">
            <a href="event.php"><i class="bi bi-arrow-left"></i> Back to Events</a>
            <span class="ed-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="ed-breadcrumb-mid"><?php echo $e['location']; ?></span>
            <span class="ed-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="ed-breadcrumb-current"><?php echo $e['title']; ?></span>
        </div>
    </div>

    <!-- Hero banner -->
    <div class="ed-hero">
        <div class="ed-hero-img-wrap">
            <img src="<?php echo $e['image']; ?>" alt="<?php echo $e['title']; ?>" class="ed-hero-img">
            <?php if(!empty($e['badge'])): ?>
            <span class="ed-hero-badge"><?php echo $e['badge']; ?></span>
            <?php endif; ?>
        </div>

        <div class="ed-hero-info">
            <div class="ed-meta-row">
                <span class="ed-meta-date"><i class="ph-light ph-calendar-blank"></i><?php echo $e['date']; ?></span>
                <span class="ed-meta-location"><i class="ph-light ph-map-pin"></i><?php echo $e['location']; ?></span>
            </div>
            <h1 class="ed-title"><?php echo $e['title']; ?></h1>
            <p class="ed-desc"><?php echo $e['desc']; ?></p>
            <p class="ed-long-desc"><?php echo $e['long_desc']; ?></p>

            <div class="ed-cta-row">
                <a href="event.php" class="ed-btn-ghost"><span><i class="bi bi-calendar-star"></i> View All Events</span></a>
            </div>
        </div>
    </div>

    <!-- Gallery section -->
    <?php if(!empty($e['gallery'])): ?>
    <div class="ed-gallery-section">
        <h2 class="ed-gallery-heading">Event Gallery</h2>
        <div class="ed-gallery-scroll" id="edGalleryScroll">
            <?php foreach($e['gallery'] as $idx => $img): ?>
            <div class="ed-gallery-item" data-index="<?php echo $idx; ?>">
                <img src="<?php echo $img; ?>" alt="<?php echo $e['title']; ?> gallery image" class="ed-gallery-img">
            </div>
            <?php endforeach; ?>
        </div>
        <button class="ed-gallery-nav ed-gallery-prev" id="edGalleryPrev" aria-label="Scroll left"><i class="bi bi-chevron-left"></i></button>
        <button class="ed-gallery-nav ed-gallery-next" id="edGalleryNext" aria-label="Scroll right"><i class="bi bi-chevron-right"></i></button>
    </div>

    <!-- Lightbox -->
    <div class="ed-lightbox" id="edLightbox">
        <button class="ed-lightbox-close" id="edLightboxClose" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        <button class="ed-lightbox-arrow ed-lightbox-prev" id="edLightboxPrev" aria-label="Previous image"><i class="bi bi-chevron-left"></i></button>
        <div class="ed-lightbox-card">
            <img src="" alt="" class="ed-lightbox-img" id="edLightboxImg">
        </div>
        <button class="ed-lightbox-arrow ed-lightbox-next" id="edLightboxNext" aria-label="Next image"><i class="bi bi-chevron-right"></i></button>
    </div>
    <?php endif; ?>

</div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js" defer></script>
<script src="Java/main.js" defer></script>
<?php if(!empty($e['gallery'])): ?>
<script>
(function() {
    const galleryImages = <?php echo json_encode($e['gallery']); ?>;
    const scrollEl = document.getElementById('edGalleryScroll');
    const prevBtn = document.getElementById('edGalleryPrev');
    const nextBtn = document.getElementById('edGalleryNext');
    const lightbox = document.getElementById('edLightbox');
    const lightboxImg = document.getElementById('edLightboxImg');
    const lightboxClose = document.getElementById('edLightboxClose');
    const lightboxPrev = document.getElementById('edLightboxPrev');
    const lightboxNext = document.getElementById('edLightboxNext');
    let currentIndex = 0;

    prevBtn.addEventListener('click', () => {
        scrollEl.scrollBy({ left: -260, behavior: 'smooth' });
    });
    nextBtn.addEventListener('click', () => {
        scrollEl.scrollBy({ left: 260, behavior: 'smooth' });
    });

    function openLightbox(index) {
        currentIndex = index;
        lightboxImg.src = galleryImages[currentIndex];
        lightbox.classList.add('open');
    }
    function closeLightbox() {
        lightbox.classList.remove('open');
    }
    function showImage(index) {
        currentIndex = (index + galleryImages.length) % galleryImages.length;
        lightboxImg.src = galleryImages[currentIndex];
    }

    document.querySelectorAll('.ed-gallery-item').forEach(item => {
        item.addEventListener('click', () => {
            openLightbox(parseInt(item.getAttribute('data-index'), 10));
        });
    });

    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
    });
    lightboxPrev.addEventListener('click', () => showImage(currentIndex - 1));
    lightboxNext.addEventListener('click', () => showImage(currentIndex + 1));

    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
        if (e.key === 'ArrowRight') showImage(currentIndex + 1);
    });

    // Swipe gesture support for touch devices
    let touchStartX = 0;
    let touchEndX = 0;
    lightbox.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    lightbox.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchEndX - touchStartX;
        if (Math.abs(diff) > 40) {
            if (diff < 0) showImage(currentIndex + 1);
            else showImage(currentIndex - 1);
        }
    }, { passive: true });
})();
</script>
<?php endif; ?>
</body>
</html>
