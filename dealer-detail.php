<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Detail | Rajdoot Paints</title>

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
    <link rel="stylesheet" href="css/pc/dealer-detail.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/dealer-detail.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/footer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/footer.css" media="screen and (max-width: 1024px)">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<?php
require_once __DIR__ . '/data/dealers.php';

$slug = $_GET['d'] ?? '';
$d = $allDealers[$slug] ?? null;

if (!$d) {
    header('Location: dealer.php');
    exit;
}
?>

<main style="padding-top: 100px;">
<div class="dd-page" style="--theme-color: <?php echo $d['theme_color']; ?>">

    <!-- Back breadcrumb -->
    <div class="dd-breadcrumb">
        <div class="dd-breadcrumb-inner">
            <a href="dealer.php"><i class="bi bi-arrow-left"></i> Back to Dealers</a>
            <span class="dd-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="dd-breadcrumb-mid"><?php echo htmlspecialchars($d['province'], ENT_QUOTES); ?></span>
            <span class="dd-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="dd-breadcrumb-current"><?php echo htmlspecialchars($d['name'], ENT_QUOTES); ?></span>
        </div>
    </div>

    <!-- Hero -->
    <div class="dd-hero">
        <div class="dd-hero-img-wrap">
            <img src="<?php echo $d['image']; ?>" alt="<?php echo htmlspecialchars($d['name'], ENT_QUOTES); ?>" class="dd-hero-img">
        </div>

        <div class="dd-hero-info">
            <span class="dd-province-pill"><i class="ph-light ph-map-trifold"></i><?php echo htmlspecialchars($d['province'], ENT_QUOTES); ?></span>
            <h1 class="dd-title"><?php echo htmlspecialchars($d['name'], ENT_QUOTES); ?></h1>
            <p class="dd-desc"><?php echo htmlspecialchars($d['desc'], ENT_QUOTES); ?></p>
            <p class="dd-long-desc"><?php echo htmlspecialchars($d['long_desc'], ENT_QUOTES); ?></p>

            <!-- Info rows -->
            <div class="dd-info-card">
                <div class="dd-info-row">
                    <span class="dd-info-icon"><i class="ph-light ph-user"></i></span>
                    <div><span class="dd-info-label">Owner</span><span class="dd-info-value"><?php echo htmlspecialchars($d['owner'], ENT_QUOTES); ?></span></div>
                </div>
                <div class="dd-info-row">
                    <span class="dd-info-icon"><i class="ph-light ph-map-pin"></i></span>
                    <div><span class="dd-info-label">Address</span><span class="dd-info-value"><?php echo htmlspecialchars($d['address'], ENT_QUOTES); ?></span></div>
                </div>
                <div class="dd-info-row">
                    <span class="dd-info-icon"><i class="ph-light ph-phone"></i></span>
                    <div><span class="dd-info-label">Phone</span><span class="dd-info-value"><?php echo htmlspecialchars($d['phone'], ENT_QUOTES); ?></span></div>
                </div>
                <div class="dd-info-row">
                    <span class="dd-info-icon"><i class="ph-light ph-clock"></i></span>
                    <div><span class="dd-info-label">Hours</span><span class="dd-info-value"><?php echo htmlspecialchars($d['hours'], ENT_QUOTES); ?></span></div>
                </div>
            </div>

            <div class="dd-cta-row">
                <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $d['phone']); ?>" class="dd-btn-primary"><i class="bi bi-telephone-fill"></i> Call Dealer</a>
                <a href="dealer.php" class="dd-btn-ghost"><span><i class="bi bi-shop"></i> View All Dealers</span></a>
            </div>
        </div>
    </div>

</div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js" defer></script>
<script src="Java/main.js" defer></script>
</body>
</html>
