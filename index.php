<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajdoot Paints</title>

    <!-- DNS prefetch for all external origins -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts: non-blocking swap -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"></noscript>

    <!-- Icons: non-blocking -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css"></noscript>

    <!-- Swiper CSS: non-blocking -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/pc/navbar.css?v=<?php echo filemtime(__DIR__ . '/css/pc/navbar.css'); ?>" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/navbar.css?v=<?php echo filemtime(__DIR__ . '/css/mobile/navbar.css'); ?>" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/hero.css?v=<?php echo filemtime(__DIR__ . '/css/pc/hero.css'); ?>" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/hero.css?v=<?php echo filemtime(__DIR__ . '/css/mobile/hero.css'); ?>" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/products.css?v=<?php echo filemtime(__DIR__ . '/css/pc/products.css'); ?>" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/products.css?v=<?php echo filemtime(__DIR__ . '/css/mobile/products.css'); ?>" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/family-banner.css?v=<?php echo filemtime(__DIR__ . '/css/pc/family-banner.css'); ?>" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/family-banner.css?v=<?php echo filemtime(__DIR__ . '/css/mobile/family-banner.css'); ?>" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/promise-section.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/promise-section.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/product-page.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/product-page.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/footer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/footer.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/mobile/slideshow.css" media="screen and (max-width: 1024px)">

    <!-- Intro preloader (critical inline styles so it paints instantly, all viewports) -->
    <style>
        #intro-loader {
            position: fixed;
            inset: 0;
            z-index: 99999;
            overflow: hidden;
        }
        /* Two curtain panels that split apart on exit (animated gradient bg) */
        #intro-loader .intro-panel {
            position: absolute;
            top: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, #fdfaf5 0%, #f7eedd 50%, #fdfaf5 100%);
            background-size: 200% 200%;
            animation: introBgShift 4s ease infinite;
            transition: transform 0.8s cubic-bezier(0.76, 0, 0.24, 1);
        }
        #intro-loader .intro-panel.left  { left: 0; }
        #intro-loader .intro-panel.right { right: 0; }
        #intro-loader.intro-hide .intro-panel.left  { transform: translateY(-101%); }
        #intro-loader.intro-hide .intro-panel.right { transform: translateY(101%); }

        /* Floating paint-drop particles */
        #intro-loader .intro-particles {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }
        #intro-loader .intro-particles span {
            position: absolute;
            bottom: -40px;
            border-radius: 50% 50% 50% 0;
            opacity: 0;
            animation: introFloat 5s linear infinite;
        }
        #intro-loader .intro-particles span:nth-child(1){ left:12%; width:14px; height:14px; background:#c49a62; animation-delay:.2s; }
        #intro-loader .intro-particles span:nth-child(2){ left:24%; width:10px; height:10px; background:#9A1616; animation-delay:1.1s; }
        #intro-loader .intro-particles span:nth-child(3){ left:38%; width:16px; height:16px; background:#1B2A6B; animation-delay:.6s; }
        #intro-loader .intro-particles span:nth-child(4){ left:55%; width:9px;  height:9px;  background:#1C6B2E; animation-delay:1.6s; }
        #intro-loader .intro-particles span:nth-child(5){ left:68%; width:13px; height:13px; background:#c49a62; animation-delay:.9s; }
        #intro-loader .intro-particles span:nth-child(6){ left:80%; width:11px; height:11px; background:#8E44AD; animation-delay:.4s; }
        #intro-loader .intro-particles span:nth-child(7){ left:90%; width:15px; height:15px; background:#E67E22; animation-delay:1.3s; }

        /* Center content sits above the panels */
        #intro-loader .intro-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity 0.4s ease;
        }
        #intro-loader.intro-hide .intro-content { opacity: 0; transform: scale(1.05); }

        /* Pulsing ring behind the logo */
        #intro-loader .intro-ring {
            position: absolute;
            width: clamp(220px, 42vw, 420px);
            aspect-ratio: 1;
            border: 2px solid rgba(196, 154, 98, 0.35);
            border-radius: 50%;
            opacity: 0;
            animation: introRing 2.6s ease-out 0.6s infinite;
        }
        #intro-loader .intro-ring.r2 { animation-delay: 1.5s; }

        #intro-loader .intro-logo {
            position: relative;
            z-index: 2;
            width: clamp(160px, 32vw, 300px);
            height: auto;
            border-radius: 18px;
            overflow: hidden;
            opacity: 0;
            transform: scale(0.7) rotate(-6deg) translateY(10px);
            filter: drop-shadow(0 0 0 rgba(196, 154, 98, 0));
            animation: introLogoIn 1s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s forwards,
                       introLogoGlow 2.2s ease-in-out 1.1s infinite;
        }
        #intro-loader .intro-tagline {
            margin-top: 18px;
            font-family: 'Outfit', sans-serif;
            font-size: clamp(0.95rem, 3vw, 1.35rem);
            letter-spacing: 0;
            font-weight: 600;
            color: #FFD11A;
            opacity: 0;
            transform: translateY(12px);
            animation: introTagIn 0.8s ease 0.8s forwards;
        }
        /* Gold underline that draws in under the tagline */
        #intro-loader .intro-tagline-line {
            margin-top: 10px;
            width: 0;
            height: 2px;
            border-radius: 2px;
            background: linear-gradient(90deg, transparent, #c49a62, transparent);
            animation: introLineGrow 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
        }
        #intro-loader .intro-bar {
            position: absolute;
            bottom: 18%;
            left: 50%;
            transform: translateX(-50%);
            width: 160px;
            height: 3px;
            border-radius: 3px;
            background: rgba(196, 154, 98, 0.18);
            overflow: hidden;
        }
        #intro-loader .intro-bar::after {
            content: '';
            position: absolute;
            inset: 0;
            width: 40%;
            background: linear-gradient(90deg, transparent, #c49a62, transparent);
            border-radius: 3px;
            animation: introBar 1.25s ease-in-out infinite;
        }
        @keyframes introBgShift {
            0%,100% { background-position: 0% 50%; }
            50%     { background-position: 100% 50%; }
        }
        @keyframes introFloat {
            0%   { transform: translateY(0) scale(0.6) rotate(0deg); opacity: 0; }
            15%  { opacity: 0.7; }
            85%  { opacity: 0.7; }
            100% { transform: translateY(-105vh) scale(1) rotate(180deg); opacity: 0; }
        }
        @keyframes introRing {
            0%   { opacity: 0.6; transform: scale(0.6); }
            100% { opacity: 0; transform: scale(1.25); }
        }
        @keyframes introLogoIn {
            0%   { opacity: 0; transform: scale(0.7) rotate(-6deg) translateY(10px); }
            60%  { opacity: 1; transform: scale(1.06) rotate(2deg) translateY(0); }
            100% { opacity: 1; transform: scale(1) rotate(0deg) translateY(0); }
        }
        @keyframes introLogoGlow {
            0%, 100% { filter: drop-shadow(0 0 6px rgba(196, 154, 98, 0.15)); }
            50%      { filter: drop-shadow(0 0 22px rgba(196, 154, 98, 0.5)); }
        }
        @keyframes introTagIn {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes introLineGrow {
            from { width: 0; }
            to   { width: clamp(120px, 30vw, 220px); }
        }
        @keyframes introBar {
            0%   { left: -40%; }
            100% { left: 100%; }
        }
        /* Prevent scroll while intro is visible */
        body.intro-active { overflow: hidden; }
    </style>
</head>
<body class="intro-active">

    <div id="intro-loader">
        <div class="intro-panel left"></div>
        <div class="intro-panel right"></div>
        <div class="intro-particles" aria-hidden="true">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span>
        </div>
        <div class="intro-content">
            <div class="intro-ring"></div>
            <div class="intro-ring r2"></div>
            <img src="assets/final_header.png" alt="Rajdoot Paints" class="intro-logo">
            <span class="intro-tagline">सुन्दरता र सुरक्षाको आधार</span>
            <span class="intro-tagline-line"></span>
            <div class="intro-bar"></div>
        </div>
    </div>

    <?php include 'components/navbar.php'; ?>

    <main class="site-main">
        <?php include 'components/home-section.php'; ?>
    </main>

    <?php include 'components/footer.php'; ?>

    <!-- Phosphor Icons deferred -->
    <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.js" defer></script>
    <!-- GSAP + ScrollTrigger deferred -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js" defer></script>
    <!-- Swiper deferred -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="Java/main.js?v=<?php echo filemtime(__DIR__ . '/Java/main.js'); ?>" defer></script>
</body>
</html>
