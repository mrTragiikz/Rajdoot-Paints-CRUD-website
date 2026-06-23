<?php
$slugMap = [
    'Tiger Interior Emulsion'              => 'tiger-interior-emulsion',
    'Tiger Acrylic Distemper'              => 'tiger-acrylic-distemper',
    'Tiger Interior Cement Primer'         => 'tiger-interior-cement-primer',
    'Home Protect Exterior Emulsion'       => 'home-protect-exterior-emulsion',
    'Tiger Exterior Emulsion'              => 'tiger-exterior-emulsion',
    'Tiger Exterior Cement Primer'         => 'tiger-exterior-cement-primer',
    'Weather Protect Exterior Cement'      => 'weather-protect-exterior-cement',
    'Weather Block Exterior Cement Primer' => 'weather-block-exterior-cement-primer',
    'Premium Gloss Enamel'                 => 'premium-gloss-enamel',
    'Tiger Synthetic Enamel'               => 'tiger-synthetic-enamel',
    'Rajdoot Synthetic Primer'             => 'rajdoot-synthetic-primer',
];

$productCategories = [
    'interior' => [
        'label'    => 'Interior Paints',
        'icon'     => 'ph-house',
        'heading'  => 'Premium Interior Paints for Every Surface',
        'subhead'  => 'High performance paints that bring beauty, protection & long-lasting finish to your interiors.',
        'products' => [
            ['title'=>'Weather Block Exterior Cement Primer','desc'=>'Ultimate exterior primer for long-lasting protection against harsh weather.','image'=>'assets/products-clean/weather-block-primer.png','theme_color'=>'#5B2D8E','badge'=>'New','features'=>[['icon'=>'ph-cloud-rain','text'=>'Weather Guard'],['icon'=>'ph-wall','text'=>'Alkali Safe'],['icon'=>'ph-shield-check','text'=>'Long Protection']]],
            ['title'=>'Tiger Interior Emulsion',      'desc'=>'Rich, smooth interior emulsion with excellent coverage and washability.','image'=>'assets/products-clean/tiger-interior-emulsion.png',   'theme_color'=>'#E07B00','badge'=>'Best Seller','features'=>[['icon'=>'ph-sparkle','text'=>'Smooth Finish'],['icon'=>'ph-drop','text'=>'Washable'],['icon'=>'ph-shield-check','text'=>'Long Lasting']]],
            ['title'=>'Tiger Acrylic Distemper',      'desc'=>'Economical matt finish for interior walls with good coverage.','image'=>'assets/products-clean/tiger-distemper.png',                   'theme_color'=>'#1B2A6B','badge'=>'','features'=>[['icon'=>'ph-check-circle','text'=>'Good Coverage'],['icon'=>'ph-paint-bucket','text'=>'Matt Finish'],['icon'=>'ph-leaf','text'=>'Low Odour']]],
            ['title'=>'Tiger Interior Cement Primer', 'desc'=>'Alkali-resistant primer that seals and prepares interior surfaces perfectly.','image'=>'assets/products-clean/tiger-interior-primer.png','theme_color'=>'#C47AB0','badge'=>'','features'=>[['icon'=>'ph-link','text'=>'Strong Bond'],['icon'=>'ph-wall','text'=>'Seals Surface'],['icon'=>'ph-shield-check','text'=>'Alkali Resistant']]],
        ],
    ],
    'exterior' => [
        'label'    => 'Exterior Paints',
        'icon'     => 'ph-sun',
        'heading'  => 'Tough Exterior Paints Built to Last',
        'subhead'  => 'Weather-resistant paints that protect and beautify every exterior surface.',
        'products' => [
            ['title'=>'Home Protect Exterior Emulsion','desc'=>'Advanced exterior emulsion with excellent weather and UV resistance.','image'=>'assets/products-clean/home-protect-emulsion.png',       'theme_color'=>'#5B2D8E','badge'=>'Popular','features'=>[['icon'=>'ph-sun','text'=>'UV Resistant'],['icon'=>'ph-drop','text'=>'Water Repellent'],['icon'=>'ph-shield-check','text'=>'Long Lasting']]],
            ['title'=>'Tiger Exterior Emulsion',       'desc'=>'Durable exterior emulsion that withstands harsh weather conditions.','image'=>'assets/products-clean/tiger-exterior-emulsion.png',    'theme_color'=>'#00478F','badge'=>'','features'=>[['icon'=>'ph-cloud-rain','text'=>'Monsoon Ready'],['icon'=>'ph-sun','text'=>'UV Guard'],['icon'=>'ph-house','text'=>'Wall Shield']]],
            ['title'=>'Tiger Exterior Cement Primer',  'desc'=>'High-build exterior cement primer for strong bonding on masonry.','image'=>'assets/products-clean/tiger-cement-primer.png',          'theme_color'=>'#4A7C59','badge'=>'New','features'=>[['icon'=>'ph-link','text'=>'Strong Bond'],['icon'=>'ph-wall','text'=>'Masonry Fill'],['icon'=>'ph-shield-check','text'=>'Weather Guard']]],
            ['title'=>'Weather Protect Exterior Cement','desc'=>'Strong bonding primer that enhances durability of any exterior system.','image'=>'assets/products-clean/weather-protect-primer.png','theme_color'=>'#9A1616','badge'=>'','features'=>[['icon'=>'ph-link','text'=>'Deep Penetration'],['icon'=>'ph-shield-check','text'=>'Durability'],['icon'=>'ph-house','text'=>'High Protection']]],
        ],
    ],
    'undercoats' => [
        'label'    => 'Undercoats',
        'icon'     => 'ph-stack',
        'heading'  => 'Professional Undercoats & Primers',
        'subhead'  => 'Build the perfect base for a flawless, long-lasting topcoat finish.',
        'products' => [
            ['title'=>'Rajdoot Synthetic Primer','desc'=>'Premium metal and wood primer for superior adhesion and rust protection.','image'=>'assets/products-clean/synthetic-enamel.png','theme_color'=>'#C62828','badge'=>'','features'=>[['icon'=>'ph-shield-check','text'=>'Anti-Rust'],['icon'=>'ph-link','text'=>'Strong Bond'],['icon'=>'ph-paint-roller','text'=>'Easy Apply']]],
        ],
    ],
    'wood' => [
        'label'    => 'Wood & Metal',
        'icon'     => 'ph-tree',
        'heading'  => 'Premium Wood & Metal Finishes',
        'subhead'  => 'Protect and beautify wood and metal surfaces with lasting gloss and sheen.',
        'products' => [
            ['title'=>'Premium Gloss Enamel',   'desc'=>'Superior gloss enamel with mirror-like finish and excellent adhesion.','image'=>'assets/products-clean/premium-gloss-enamel.png',    'theme_color'=>'#1B2A6B','badge'=>'Popular','features'=>[['icon'=>'ph-sparkle','text'=>'Mirror Gloss'],['icon'=>'ph-paint-roller','text'=>'Smooth Coverage'],['icon'=>'ph-shield-check','text'=>'Anti-Rust']]],
            ['title'=>'Tiger Synthetic Enamel', 'desc'=>'High-gloss synthetic enamel for wood and metal with vivid colour retention.','image'=>'assets/products-clean/tiger-synthetic-enamel.png','theme_color'=>'#7B2D8B','badge'=>'','features'=>[['icon'=>'ph-sparkle','text'=>'High Gloss'],['icon'=>'ph-palette','text'=>'Vivid Colour'],['icon'=>'ph-shield-check','text'=>'Chip Resistant']]],
        ],
    ],
];

$qualityBadges = [
    ['icon'=>'ph-shield-check', 'title'=>'Premium Quality',   'desc'=>'Superior raw materials'],
    ['icon'=>'ph-leaf',         'title'=>'Low VOC',           'desc'=>'Eco-friendly & safe'],
    ['icon'=>'ph-paint-roller', 'title'=>'Easy Application',  'desc'=>'Smooth & hassle-free'],
    ['icon'=>'ph-clock',        'title'=>'Long Lasting',      'desc'=>'Durable & reliable finish'],
];
?>


<section class="prod-page-section" id="products">
<div class="prod-page-container">

    <!-- Tabs (PC) -->
    <div class="prod-tabs">
        <button class="prod-tab-btn active" data-tab="all">
            <i class="ph-light ph-squares-four"></i>All Products
        </button>
        <?php foreach($productCategories as $key=>$cat): ?>
        <button class="prod-tab-btn" data-tab="<?php echo $key; ?>">
            <i class="ph-light <?php echo $cat['icon']; ?>"></i><?php echo $cat['label']; ?>
        </button>
        <?php endforeach; ?>
    </div>

    <!-- Category selector (mobile only) -->
    <div class="prod-mobile-select-wrap" id="prodMobileSelectWrap">
        <button class="prod-mobile-selected" id="prodMobileSelected">
            <span class="prod-selected-icon"><i class="ph-light ph-squares-four"></i></span>
            <span class="prod-selected-label">All Products</span>
            <i class="ph-light ph-caret-down prod-select-caret"></i>
        </button>
        <div class="prod-mobile-dropdown" id="prodMobileDropdown">
            <div class="prod-dropdown-item active" data-value="all">
                <span class="prod-dropdown-icon"><i class="ph-light ph-squares-four"></i></span>
                <span class="prod-drop-label">All Products</span>
            </div>
            <?php foreach($productCategories as $key=>$cat): ?>
            <div class="prod-dropdown-item" data-value="<?php echo $key; ?>">
                <span class="prod-dropdown-icon"><i class="ph-light <?php echo $cat['icon']; ?>"></i></span>
                <span class="prod-drop-label"><?php echo $cat['label']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ALL panel -->
    <div class="prod-tab-panel active" data-panel="all">
        <div class="prod-cat-header">
            <div class="prod-cat-header-text">
                <h2 class="prod-cat-title">All Products</h2>
                <p class="prod-cat-sub">Browse our complete range of premium paints, primers and finishes.</p>
                <div class="prod-cat-line"><span></span><span></span></div>
            </div>
        </div>
        <div class="prod-page-grid">
            <?php foreach($productCategories as $key=>$cat): foreach($cat['products'] as $p):
                $slug = $slugMap[$p['title']] ?? '';
            ?>
            <div class="prod-page-card" style="--theme-color:<?php echo $p['theme_color']; ?>;">
                <div class="prod-page-img-wrap">
                    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>" class="prod-page-img">
                </div>
                <div class="prod-page-card-body">
                    <h4 class="prod-page-card-title"><?php echo $p['title']; ?></h4>
                    <p class="prod-page-card-desc"><?php echo $p['desc']; ?></p>
                    <div class="prod-page-features">
                        <?php foreach($p['features'] as $f): ?>
                        <div class="prod-page-feature-item">
                            <i class="ph-light <?php echo $f['icon']; ?>"></i>
                            <span><?php echo $f['text']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="product-detail.php?p=<?php echo $slug; ?>" class="prod-page-link">View Details</a>
                </div>
            </div>
            <?php endforeach; endforeach; ?>
        </div>
        <div class="prod-quality-bar">
            <div class="prod-quality-track">
                <?php foreach(array_merge($qualityBadges,$qualityBadges) as $q): ?>
                <div class="prod-quality-item">
                    <i class="ph-light <?php echo $q['icon']; ?>"></i>
                    <div><strong><?php echo $q['title']; ?></strong><span><?php echo $q['desc']; ?></span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Category Panels -->
    <?php foreach($productCategories as $key=>$cat): ?>
    <div class="prod-tab-panel" data-panel="<?php echo $key; ?>">

        <!-- Category heading -->
        <div class="prod-cat-header">
            <div class="prod-cat-header-text">
                <h2 class="prod-cat-title"><?php echo $cat['heading']; ?></h2>
                <p class="prod-cat-sub"><?php echo $cat['subhead']; ?></p>
                <div class="prod-cat-line"><span></span><span></span></div>
            </div>
        </div>

        <!-- Grid -->
        <div class="prod-page-grid">
            <?php foreach($cat['products'] as $p):
                $featuresJson = htmlspecialchars(json_encode($p['features']), ENT_QUOTES);
            ?>
            <div class="prod-page-card"
                style="--theme-color:<?php echo $p['theme_color']; ?>;"
                data-title="<?php echo htmlspecialchars($p['title'],ENT_QUOTES); ?>"
                data-desc="<?php echo htmlspecialchars($p['desc'],ENT_QUOTES); ?>"
                data-image="<?php echo $p['image']; ?>"
                data-bg="<?php echo $p['image']; ?>"
                data-badge="<?php echo htmlspecialchars($p['badge']??'',ENT_QUOTES); ?>"
                data-category="<?php echo htmlspecialchars($cat['label'],ENT_QUOTES); ?>"
                data-color="<?php echo $p['theme_color']; ?>"
                data-features="<?php echo $featuresJson; ?>">

                <div class="prod-page-img-wrap">
                    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>" class="prod-page-img">
                </div>

                <div class="prod-page-card-body">
                    <h4 class="prod-page-card-title"><?php echo $p['title']; ?></h4>
                    <p class="prod-page-card-desc"><?php echo $p['desc']; ?></p>
                    <div class="prod-page-features">
                        <?php foreach($p['features'] as $f): ?>
                        <div class="prod-page-feature-item">
                            <i class="ph-light <?php echo $f['icon']; ?>"></i>
                            <span><?php echo $f['text']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php $slug = $slugMap[$p['title']] ?? ''; ?>
                    <a href="product-detail.php?p=<?php echo $slug; ?>" class="prod-page-link">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Quality bar -->
        <div class="prod-quality-bar">
            <div class="prod-quality-track">
                <?php foreach(array_merge($qualityBadges,$qualityBadges) as $q): ?>
                <div class="prod-quality-item">
                    <i class="ph-light <?php echo $q['icon']; ?>"></i>
                    <div><strong><?php echo $q['title']; ?></strong><span><?php echo $q['desc']; ?></span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <?php endforeach; ?>

</div>
</section>
