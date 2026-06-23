<?php
// navbar.php — top floating pill navbar over hero
$current = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar" aria-label="Main navigation">
    <div class="navbar-container">
        <span class="navbar-shine" aria-hidden="true"></span>

        <a href="index.php" class="navbar-brand">
            <img src="assets/final_header.png" alt="Rajdoot Logo" class="brand-logo-img">
        </a>

        <button class="mobile-toggle" type="button" aria-label="Open menu" aria-expanded="false">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <!-- keep nav-wrapper for PC compatibility -->
        <div class="nav-wrapper">
            <ul class="nav-menu">
                <li class="nav-item <?php echo $current === 'index.php' ? 'active' : ''; ?>">
                    <a href="index.php" class="nav-link">
                        <span class="nav-icon-badge nav-badge-1"><i class="ph-light ph-house nav-icon"></i></span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-item <?php echo $current === 'products.php' ? 'active' : ''; ?>">
                    <a href="products.php" class="nav-link">
                        <span class="nav-icon-badge nav-badge-2"><i class="ph-light ph-swatches nav-icon"></i></span>
                        <span class="nav-text">Products</span>
                    </a>
                </li>
                <li class="nav-item <?php echo $current === 'event.php' ? 'active' : ''; ?>">
                    <a href="event.php" class="nav-link">
                        <span class="nav-icon-badge nav-badge-3"><i class="ph-light ph-calendar-star nav-icon"></i></span>
                        <span class="nav-text">Events</span>
                    </a>
                </li>
                <li class="nav-item <?php echo $current === 'dealer.php' ? 'active' : ''; ?>">
                    <a href="dealer.php" class="nav-link">
                        <span class="nav-icon-badge nav-badge-4"><i class="ph-light ph-map-pin nav-icon"></i></span>
                        <span class="nav-text">Dealers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-icon-badge nav-badge-5"><i class="ph-light ph-users nav-icon"></i></span>
                        <span class="nav-text">About</span>
                    </a>
                </li>
                <li class="nav-item <?php echo $current === 'contact.php' ? 'active' : ''; ?>">
                    <a href="contact.php" class="nav-link">
                        <span class="nav-icon-badge nav-badge-6"><i class="ph-light ph-envelope nav-icon"></i></span>
                        <span class="nav-text">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- RIGHT SIDE DRAWER (mobile only) -->
<div class="nav-backdrop" id="navBackdrop"></div>

<aside class="nav-drawer" id="navDrawer" aria-label="Navigation drawer">

    <!-- Header -->
    <div class="drawer-header">
        <img src="assets/final_header.png" alt="Rajdoot Logo" class="drawer-logo">
        <button class="drawer-close" id="drawerClose" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <!-- Nav links -->
    <nav class="drawer-nav">
        <ul class="drawer-menu">
            <li class="drawer-item <?php echo $current === 'index.php' ? 'active' : ''; ?>">
                <a href="index.php">
                    <span class="drawer-icon"><i class="ph-light ph-house"></i></span>
                    <span class="drawer-item-label">Home</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
            <li class="drawer-item <?php echo $current === 'products.php' ? 'active' : ''; ?>">
                <a href="products.php">
                    <span class="drawer-icon"><i class="ph-light ph-swatches"></i></span>
                    <span class="drawer-item-label">Products</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
            <li class="drawer-item <?php echo $current === 'event.php' ? 'active' : ''; ?>">
                <a href="event.php">
                    <span class="drawer-icon"><i class="ph-light ph-calendar-star"></i></span>
                    <span class="drawer-item-label">Events</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
            <li class="drawer-item <?php echo $current === 'dealer.php' ? 'active' : ''; ?>">
                <a href="dealer.php">
                    <span class="drawer-icon"><i class="ph-light ph-map-pin"></i></span>
                    <span class="drawer-item-label">Dealers</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
            <li class="drawer-item">
                <a href="#">
                    <span class="drawer-icon"><i class="ph-light ph-users"></i></span>
                    <span class="drawer-item-label">About Us</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
            <li class="drawer-item <?php echo $current === 'contact.php' ? 'active' : ''; ?>">
                <a href="contact.php">
                    <span class="drawer-icon"><i class="ph-light ph-envelope"></i></span>
                    <span class="drawer-item-label">Contact</span>
                    <i class="bi bi-chevron-right drawer-arrow"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Person image — transparent cutout (background removed) -->
    <div class="drawer-person-wrap">
        <img src="assets/062A1160-nobg.png" alt="" class="drawer-person-img" width="867" height="1300">
    </div>

    <!-- Footer credit -->
    <div class="drawer-credit">
        <span class="drawer-credit-version"><i class="ph-bold ph-sparkle"></i> Nav 3.0</span>
        <span class="drawer-credit-by">Crafted by <strong>Prabin</strong></span>
    </div>

</aside>
