<?php
// home-section.php - Combined hero, products, and weather-block

// --- products.php Data ---
$homeSlugMap = [
    'Weather Block Exterior Cement'    => 'weather-block-exterior-cement-primer',
    'Home Protect Exterior Emulsion'   => 'home-protect-exterior-emulsion',
    'Weather Protect Exterior Cement'  => 'weather-protect-exterior-cement',
    'Premium Gloss Enamel'             => 'premium-gloss-enamel',
];

$products = [
    [
        'category' => 'BLOCK PRIMER',
        'title' => 'Weather Block Exterior Cement',
        'desc' => 'Ultimate exterior primer for long-lasting protection against harsh weather.',
        'image' => 'assets/hero-products/Weather Block Exterior Cement Primer bucket.png',
        'icon' => 'ph-stack',
        'bg_image' => 'assets/bg_cement_exterior.png',
        'theme_color' => '#1C6B2E',
        'badge' => 'New',
        'features' => [
            ['icon' => 'ph-cloud-rain', 'text' => 'Weather<br>Guard'],
            ['icon' => 'ph-wall', 'text' => 'Alkali<br>Resistant'],
            ['icon' => 'ph-shield-check', 'text' => 'Long Term<br>Protection'],
        ]
    ],
    [
        'category' => 'WEATHER PROTECTION',
        'title' => 'Home Protect Exterior Emulsion',
        'desc' => 'Advanced exterior protection with excellent weather resistance and long-lasting durability.',
        'image' => 'assets/hero-products/Home Protect Exterior Emulsion.png',
        'icon' => 'ph-shield-check',
        'bg_image' => 'assets/bg_exterior_house.png',
        'theme_color' => '#00478F',
        'features' => [
            ['icon' => 'ph-sun', 'text' => 'UV<br>Resistant'],
            ['icon' => 'ph-drop', 'text' => 'Water<br>Repellent'],
            ['icon' => 'ph-shield-check', 'text' => 'Long<br>Lasting'],
        ]
    ],
    [
        'category' => 'EXTERIOR PRIMER',
        'title' => 'Weather Protect Exterior Cement',
        'desc' => 'Provides strong bonding and enhances durability of exterior paint.',
        'image' => 'assets/hero-products/Weather Protect Exterior Cement Primer bucket.png',
        'icon' => 'ph-link',
        'bg_image' => 'assets/bg_cement_exterior.png',
        'theme_color' => '#9A1616',
        'features' => [
            ['icon' => 'ph-link', 'text' => 'Strong<br>Bonding'],
            ['icon' => 'ph-shield-check', 'text' => 'Enhances<br>Durability'],
            ['icon' => 'ph-house', 'text' => 'High<br>Protection'],
        ]
    ],
    [
        'category' => 'PREMIUM ENAMEL',
        'title' => 'Premium Gloss Enamel',
        'desc' => 'Superior gloss enamel for wood and metal with mirror-like finish, excellent adhesion and lasting colour retention.',
        'image' => 'assets/hero-products/enemal.png',
        'icon' => 'ph-star',
        'bg_image' => 'assets/bg_interior_chair.png',
        'theme_color' => '#1B2A6B',
        'features' => [
            ['icon' => 'ph-sparkle', 'text' => 'Mirror<br>Gloss'],
            ['icon' => 'ph-paint-roller', 'text' => 'Smooth<br>Coverage'],
            ['icon' => 'ph-shield-check', 'text' => 'Anti-Rust<br>Protection'],
        ]
    ]
];

$quickLinks = [
    [
        'title' => 'COLOUR VISUALIZER',
        'desc' => 'See colours on your walls',
        'icon' => 'bi-palette-fill',
        'color' => '#8E44AD'
    ],
    [
        'title' => 'FIND A DEALER',
        'desc' => 'Locate dealers near you',
        'icon' => 'bi-geo-alt-fill',
        'color' => '#E67E22'
    ],
    [
        'title' => 'DOWNLOAD CATALOGUE',
        'desc' => 'View & download shade card',
        'icon' => 'bi-journal-arrow-down',
        'color' => '#2ECC71'
    ]
];
?>

<!-- HERO SECTION -->
<section class="hero">
    <img src="assets/hero_section.png" alt="Rajdoot Paints landscape" class="hero-img" width="2048" height="953">
    
    <div class="hero-content">
        <h1 class="hero-title">Nepal Lives.<br>Every Day.</h1>
        <p class="hero-text">
            <span class="type-line-1">Premium quality paints crafted to protect,</span><br>
            <span class="type-line-2">beautify and add value to your spaces.</span>
        </p>
        <div class="hero-buttons">
            <a href="#" class="btn-hero-primary">Explore Colours</a>
            <a href="#" class="btn-hero-secondary"><i class="ph-fill ph-play btn-play-icon"></i> Watch Video</a>
        </div>
        
        <div class="hero-features">
            <div class="feature-item">
                <i class="ph-light ph-shield-check feature-icon"></i>
                <span class="feature-text">Weather<br>Protection</span>
            </div>
            <div class="feature-divider"></div>
            <div class="feature-item">
                <i class="ph-light ph-drop feature-icon"></i>
                <span class="feature-text">Long Lasting<br>Beauty</span>
            </div>
            <div class="feature-divider"></div>
            <div class="feature-item">
                <i class="ph-light ph-sparkle feature-icon"></i>
                <span class="feature-text">Rich & Elegant<br>Finishes</span>
            </div>
            <div class="feature-divider"></div>
            <div class="feature-item">
                <i class="ph-light ph-leaf feature-icon"></i>
                <span class="feature-text">Low VOC &<br>Eco Friendly</span>
            </div>
        </div>
    </div>
    <div class="hero-bucket-wrap" aria-hidden="true">
        <img src="assets/buck.png" alt="Rajdoot Weather Block Premium Exterior Emulsion" class="hero-bucket" width="600" height="800">
    </div>
    <div class="hero-side-wrap" aria-hidden="true">
        <img src="assets/side_section.png" alt="" class="hero-side">
    </div>
</section>

<!-- VISUALIZE YOUR SPACE SECTION (floats in hero top-right on PC) -->
<section class="visualize-section">
    <div class="visualize-container">
        <h2 class="visualize-title">Visualize Your Space</h2>
        <span class="visualize-divider" aria-hidden="true"></span>
        <p class="visualize-subtitle">Experience Rajdoot colours on your walls before you paint.</p>

        <div class="visualize-grid">
            <?php
            $visualizeCards = [
                ['img' => 'assets/home-content/room_1.png', 'alt' => 'Warm Beige Living Room', 'label' => 'Warm Beige | Living Room', 'desc' => 'A panelled wall in soft warm beige sets a relaxed, sunlit mood behind a plush sectional sofa and round wood coffee table, with sage and dusty-blue cushions adding a gentle contrast.', 'color' => '#d9bd8f'],
                ['img' => 'assets/home-content/room_2.png', 'alt' => 'Nature Green Interior',  'label' => 'Nature Green | Interior', 'desc' => 'Deep forest green panelled walls wrap a velvet sofa in olive and warm tan cushions, finished with a brass arc lamp and potted greenery for a rich, nature-inspired living room.', 'color' => '#46563a'],
                ['img' => 'assets/home-content/room_3.png', 'alt' => 'Blush Pink Bedroom',     'label' => 'Blush Pink | Bedroom', 'desc' => 'A romantic blush pink feature wall frames a tufted headboard and layered pink-and-cream bedding, with warm wood nightstands and fresh florals completing the soft, feminine glow.', 'color' => '#d98a82'],
                ['img' => 'assets/home-content/6.jpeg', 'alt' => 'Royal Blue Living Room',    'label' => 'Royal Blue | Living Room', 'desc' => 'Bold navy panelled walls make a dramatic backdrop for a cream sofa styled with indigo and grey cushions, brass floor lamp and abstract art for a refined, gallery-like living room.', 'color' => '#1b2c52'],
                ['img' => 'assets/home-content/8.jpeg', 'alt' => 'Terracotta Dining Room',    'label' => 'Terracotta | Dining Room', 'desc' => 'Warm terracotta walls glow under a dome pendant light above a rustic wood dining table, woven rattan chairs and a jute rug, creating an earthy, welcoming dining space.', 'color' => '#a8492f'],
                ['img' => 'assets/home-content/5.jpeg', 'alt' => 'Sage Green Study',          'label' => 'Sage Green | Study', 'desc' => 'Soft sage green built-in shelving and panelled walls frame a wooden desk with a brass task lamp, creating a calm, focused home office filled with books and greenery.', 'color' => '#8c9a78'],
                ['img' => 'assets/home-content/7.jpeg', 'alt' => 'Mustard Yellow Bedroom',    'label' => 'Mustard Yellow | Bedroom', 'desc' => 'A rich mustard yellow wall energises this bedroom, paired with a linen upholstered bed, layered cream and ochre bedding, and warm lamp light for a cosy autumnal feel.', 'color' => '#d39a26'],
                ['img' => 'assets/home-content/4.jpeg', 'alt' => 'Charcoal Grey Hallway',     'label' => 'Charcoal Grey | Hallway', 'desc' => 'Moody charcoal grey panelling elevates this hallway, framing a round brass mirror, console table and gallery art under warm recessed lighting for a sophisticated entryway.', 'color' => '#3a3b3f'],
            ];
            // duplicate set so the mobile marquee can loop seamlessly
            foreach (array_merge($visualizeCards, $visualizeCards) as $vc): ?>
            <div class="visualize-card" data-img="<?php echo htmlspecialchars($vc['img']); ?>" data-alt="<?php echo htmlspecialchars($vc['alt']); ?>" data-label="<?php echo htmlspecialchars($vc['label']); ?>" data-desc="<?php echo htmlspecialchars($vc['desc']); ?>" data-color="<?php echo htmlspecialchars($vc['color']); ?>">
                <div class="visualize-img">
                    <img src="<?php echo $vc['img']; ?>" alt="<?php echo $vc['alt']; ?>">
                </div>
                <span class="visualize-label"><?php echo $vc['label']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>

        <p class="visualize-note">Colours shown are for representation only and may vary slightly from actual wall shades.</p>
    </div>
</section>

<!-- VISUALIZE CARD MODAL (mobile) -->
<div class="visualize-modal-overlay" id="visualizeModal" aria-hidden="true">
    <div class="visualize-modal">
        <button class="visualize-modal-close" id="visualizeModalClose" aria-label="Close">
            <i class="ph-bold ph-x"></i>
        </button>
        <div class="visualize-modal-img">
            <img src="" alt="" id="visualizeModalImg">
        </div>
        <div class="visualize-modal-body">
            <div class="visualize-modal-top-row">
                <span class="visualize-modal-tag">Colour Inspiration</span>
                <span class="visualize-modal-swatch" id="visualizeModalSwatch"></span>
            </div>
            <h3 class="visualize-modal-label" id="visualizeModalLabel"></h3>
            <div class="visualize-modal-divider"></div>
            <p class="visualize-modal-desc" id="visualizeModalDesc"></p>
        </div>
    </div>
</div>

<!-- PRODUCTS SECTION -->
<section class="products-section">
    <div class="products-container">
        <!-- Header -->
        <div class="products-header">
            <div class="products-header-left">
                <h3 class="section-subtitle">OUR FEATURED PRODUCTS</h3>
                <h2 class="section-title">Finishes That<br>Define Every Space<span class="golden-dot">.</span></h2>
            </div>
            <div class="products-header-right">
                <p class="section-desc">Explore our handpicked range of premium quality paints crafted to protect, beautify and add value to your spaces.</p>
                <a href="#" class="btn-outline-pill">View All Products</a>
            </div>
        </div>


        <!-- Product Cards Carousel -->
        <div class="products-carousel-wrap">
            <div class="products-grid products-marquee">
                <?php 
                $loopedProducts = array_merge($products, $products);
                foreach($loopedProducts as $product): ?>
            <div class="product-card" style="--theme-color: <?php echo $product['theme_color']; ?>; --theme-color-light: <?php echo $product['theme_color']; ?>15;">
                <?php if(!empty($product['badge'])): ?>
                <span class="product-badge-new"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <div class="product-card-img-wrap" style="background-image: url('<?php echo $product['bg_image']; ?>');">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="product-card-img">
                </div>
                <div class="product-card-content">
                    <span class="product-category"><i class="ph-light <?php echo $product['icon']; ?>"></i> <?php echo $product['category']; ?></span>
                    <h4 class="product-title"><?php echo $product['title']; ?></h4>
                    <p class="product-desc"><?php echo $product['desc']; ?></p>
                    
                    <div class="product-features">
                        <?php foreach($product['features'] as $feature): ?>
                        <div class="feature-icon-item">
                            <i class="ph-light <?php echo $feature['icon']; ?>"></i>
                            <span><?php echo $feature['text']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <?php $slug = $homeSlugMap[$product['title']] ?? ''; ?>
                    <a href="product-detail.php?p=<?php echo $slug; ?>" class="product-link">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="quick-links-section">
    <div class="quick-links">
        <?php foreach($quickLinks as $link): ?>
        <a href="#" class="quick-link-card" style="--ql-color: <?php echo $link['color'] ?? '#c49553'; ?>">
            <div class="quick-link-icon-wrap">
                <?php if(strpos($link['icon'], 'assets/') === 0): ?>
                    <img src="<?php echo $link['icon']; ?>" alt="icon" style="width: 24px; height: 24px; object-fit: contain;">
                <?php else: ?>
                    <i class="<?php echo strpos($link['icon'], 'bi-') === 0 ? 'bi ' : 'ph-fill '; ?><?php echo $link['icon']; ?>" style="color: <?php echo $link['color'] ?? 'inherit'; ?>; font-size: 1.5rem;"></i>
                <?php endif; ?>
            </div>
            <div class="quick-link-text">
                <h5><?php echo $link['title']; ?></h5>
                <p><?php echo $link['desc']; ?></p>
            </div>
            <div class="quick-link-arrow"><i class="ph-light ph-arrow-right"></i></div>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<!-- PAINT TRUCK SCENE -->
<div class="truck-scene" aria-hidden="true">
    <div class="ts-truck-wrap">
        <svg class="ts-svg" viewBox="0 0 590 170" fill="none" xmlns="http://www.w3.org/2000/svg">

            <defs>
                <clipPath id="poster-clip">
                    <rect x="210" y="44" width="105" height="92"/>
                </clipPath>
            </defs>

            <!-- ═══ CARGO BODY (LEFT SIDE, x=8 to x=458) ═══ -->
            <rect x="8"   y="22" width="452" height="124" rx="8" fill="#CC0000" stroke="#aa0000" stroke-width="1.5"/>
            <!-- top dark red banner -->
            <rect x="8"   y="22" width="452" height="20"  rx="8" fill="#8B1A1A"/>
            <rect x="8"   y="34" width="452" height="8"   fill="#8B1A1A"/>
            <!-- bottom navy strip -->
            <rect x="8"   y="136" width="452" height="10" rx="5" fill="#0A2342"/>

            <!-- CONTACT ZONE — back of container (LEFT side, max x=224) -->
            <text x="118" y="52" font-family="Arial,sans-serif" font-size="9" font-weight="900" letter-spacing="2.5" text-anchor="middle" fill="#ffffff">CONTACT US</text>
            <line x1="16" y1="57" x2="220" y2="57" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>

            <text x="18" y="72" font-family="Arial,sans-serif" font-size="10" font-weight="800" fill="#ffffff">&#9990; 056-412290</text>
            <text x="18" y="87" font-family="Arial,sans-serif" font-size="9.5" font-weight="800" fill="#ffffff">&#9679; Bharatpur-04, Chitwan</text>

            <!-- email clipped to zone width via textLength -->
            <text x="18" y="101" font-family="Arial,sans-serif" font-size="8" font-weight="700" fill="#ffddaa"
                  textLength="198" lengthAdjust="spacingAndGlyphs">&#9993; rajdootpaintsnepal@gmail.com</text>

            <line x1="16" y1="108" x2="220" y2="108" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
            <text x="118" y="120" font-family="Arial,sans-serif" font-size="7.5" font-weight="800" letter-spacing="1.5" text-anchor="middle" fill="#ffd080">RAJDOOT PAINTS NEPAL</text>

            <!-- Vertical divider -->
            <line x1="228" y1="46" x2="228" y2="134" stroke="rgba(255,255,255,0.3)" stroke-width="1.2"/>

            <!-- Brand logo — tight fit, no box -->
            <image x="330" y="60" width="110" height="42" href="assets/final_header.png" preserveAspectRatio="xMidYMid meet"/>

            <!-- POSTER IMAGE — front area right of brand -->
            <g transform="translate(585,0) scale(-1,1)">
                <image class="ts-poster-img" x="210" y="44" width="105" height="92" href="assets/poster.png" preserveAspectRatio="xMidYMid meet" clip-path="url(#poster-clip)"/>
            </g>

            <!-- ═══ CAB (RIGHT SIDE, x=460 to x=582) ═══ -->
            <path d="M572,52 L572,148 L460,148 L460,22 L502,22 L532,22 L576,52 Z" fill="#0A2342"/>
            <path d="M563,58 L563,90 L467,90 L467,26 L500,26 L530,26 L560,58 Z" fill="#0d1e35"/>

            <!-- Windshield -->
            <path d="M556,60 L556,88 L469,88 L469,28 L500,28 L528,28 Z" fill="#90d8f0" opacity="0.9"/>
            <path d="M556,60 L536,28 L556,28 Z" fill="rgba(255,255,255,0.18)"/>
            <line x1="532" y1="28" x2="532" y2="88" stroke="rgba(255,255,255,0.08)" stroke-width="1.5"/>

            <!-- Door -->
            <rect x="471" y="90" width="92" height="52" rx="4" fill="none" stroke="#0f2640" stroke-width="1.5"/>
            <rect x="471" y="117" width="10" height="4"  rx="2" fill="#c49553"/>

            <!-- Exhaust pipe (on right/front of cab) -->
            <rect x="549" y="22" width="8" height="30" rx="4" fill="#3a3a3a"/>
            <rect x="546" y="18" width="14" height="8"  rx="4" fill="#2a2a2a"/>

            <!-- Smoke from exhaust (right side) -->
            <circle cx="554" cy="18" r="7" fill="rgba(160,155,148,0.6)">
                <animate attributeName="cy" values="18;-6"  dur="1.8s" repeatCount="indefinite"/>
                <animate attributeName="r"  values="7;14"   dur="1.8s" repeatCount="indefinite"/>
                <animate attributeName="opacity" values="0.6;0" dur="1.8s" repeatCount="indefinite"/>
            </circle>
            <circle cx="554" cy="4" r="11" fill="rgba(155,150,143,0.4)">
                <animate attributeName="cy" values="4;-22"  dur="1.8s" begin="0.55s" repeatCount="indefinite"/>
                <animate attributeName="r"  values="11;20"  dur="1.8s" begin="0.55s" repeatCount="indefinite"/>
                <animate attributeName="opacity" values="0.4;0" dur="1.8s" begin="0.55s" repeatCount="indefinite"/>
            </circle>

            <!-- Headlight (RIGHT face) -->
            <rect x="568" y="94" width="10" height="24" rx="3" fill="#FFF176"/>
            <rect x="568" y="120" width="10" height="10" rx="2.5" fill="#FB8C00"/>
            <!-- Bumper -->
            <rect x="560" y="132" width="22" height="12" rx="4" fill="#c49553"/>
            <rect x="563" y="134" width="14" height="8"  rx="2" fill="#fff" opacity="0.9"/>

            <!-- Chassis -->
            <rect x="8" y="145" width="538" height="6" rx="3" fill="#1a1a1a"/>

            <!-- FRONT WHEEL (RIGHT side — near cab) -->
            <circle cx="520" cy="152" r="24" fill="#1a1a1a"/>
            <circle cx="520" cy="152" r="21" fill="none" stroke="#333" stroke-width="5" stroke-dasharray="8 4"/>
            <circle cx="520" cy="152" r="15" fill="#111"/>
            <g class="ts-spokes-front">
                <line x1="520" y1="138" x2="520" y2="166" stroke="#555" stroke-width="2.5"/>
                <line x1="506" y1="152" x2="534" y2="152" stroke="#555" stroke-width="2.5"/>
                <line x1="510" y1="142" x2="530" y2="162" stroke="#555" stroke-width="2"/>
                <line x1="530" y1="142" x2="510" y2="162" stroke="#555" stroke-width="2"/>
            </g>
            <circle cx="520" cy="152" r="7"   fill="#c49553"/>
            <circle cx="520" cy="152" r="3.5" fill="#fff" opacity="0.8"/>

            <!-- REAR WHEEL 1 (LEFT side) -->
            <circle cx="87" cy="152" r="24" fill="#1a1a1a"/>
            <circle cx="87" cy="152" r="21" fill="none" stroke="#333" stroke-width="5" stroke-dasharray="8 4"/>
            <circle cx="87" cy="152" r="15" fill="#111"/>
            <g class="ts-spokes-rear1">
                <line x1="87" y1="138" x2="87"  y2="166" stroke="#555" stroke-width="2.5"/>
                <line x1="73" y1="152" x2="101" y2="152" stroke="#555" stroke-width="2.5"/>
                <line x1="77" y1="142" x2="97"  y2="162" stroke="#555" stroke-width="2"/>
                <line x1="97" y1="142" x2="77"  y2="162" stroke="#555" stroke-width="2"/>
            </g>
            <circle cx="87" cy="152" r="7"   fill="#c49553"/>
            <circle cx="87" cy="152" r="3.5" fill="#fff" opacity="0.8"/>

            <!-- REAR WHEEL 2 -->
            <circle cx="134" cy="152" r="24" fill="#1a1a1a"/>
            <circle cx="134" cy="152" r="21" fill="none" stroke="#333" stroke-width="5" stroke-dasharray="8 4"/>
            <circle cx="134" cy="152" r="15" fill="#111"/>
            <g class="ts-spokes-rear2">
                <line x1="134" y1="138" x2="134" y2="166" stroke="#555" stroke-width="2.5"/>
                <line x1="120" y1="152" x2="148" y2="152" stroke="#555" stroke-width="2.5"/>
                <line x1="124" y1="142" x2="144" y2="162" stroke="#555" stroke-width="2"/>
                <line x1="144" y1="142" x2="124" y2="162" stroke="#555" stroke-width="2"/>
            </g>
            <circle cx="134" cy="152" r="7"   fill="#c49553"/>
            <circle cx="134" cy="152" r="3.5" fill="#fff" opacity="0.8"/>

        </svg>
    </div>
    <!-- Road -->
    <div class="ts-road"><div class="ts-marks"></div></div>
</div>

<!-- LOCATION TICKER BELOW TRUCK -->
<div class="loc-ticker-wrap">
    <div class="loc-ticker-track">
        <span class="loc-tick-item"><i class="ph-fill ph-phone-call"></i> 056-412290</span>
        <span class="loc-tick-sep">•</span>
        <span class="loc-tick-item"><i class="ph-fill ph-map-pin"></i> Bharatpur-04, Chitwan</span>
        <span class="loc-tick-sep">•</span>
        <span class="loc-tick-item"><i class="ph-fill ph-envelope-simple"></i> rajdootpaintsnepal@gmail.com</span>
        <span class="loc-tick-sep">•</span>
        <!-- duplicate for seamless loop -->
        <span class="loc-tick-item"><i class="ph-fill ph-phone-call"></i> 056-412290</span>
        <span class="loc-tick-sep">•</span>
        <span class="loc-tick-item"><i class="ph-fill ph-map-pin"></i> Bharatpur-04, Chitwan</span>
        <span class="loc-tick-sep">•</span>
        <span class="loc-tick-item"><i class="ph-fill ph-envelope-simple"></i> rajdootpaintsnepal@gmail.com</span>
        <span class="loc-tick-sep">•</span>
    </div>
</div>

<!-- FAMILY BANNER SECTION -->
<section class="family-banner-section">
    <div class="fb-wrapper">
        <div class="fb-container">
            <div class="fb-content-wrap">
                <div class="fb-left-col">
                    <div class="fb-img-pan-wrap">
                        <img src="assets/home3.jpg" alt="Happy Family" class="fb-family-img fb-img-pan">
                    </div>
                </div>
                
                <div class="fb-right-col">
                    <div class="fb-logo-wrap">
                        <img src="assets/final_header.png" alt="Rajdoot Paints" class="fb-logo">
                        <span class="fb-tagline">COLOURS OF TRUST</span>
                    </div>
                    
                    <h2 class="fb-title">Beautiful Spaces.<br><span>Beautiful Memories.</span></h2>
                    <p class="fb-desc">Rajdoot Paints brings rich colour, smooth finish and long lasting beauty to every Nepali home.</p>
                    
                    <div class="fb-features-marquee-wrap">
                        <div class="fb-features-grid fb-features-marquee">
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-paint-bucket"></i></div>
                                <span class="fb-feature-text">Rich Colour<br>Finish</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-shield-check"></i></div>
                                <span class="fb-feature-text">Long Lasting<br>Beauty</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-stars"></i></div>
                                <span class="fb-feature-text">Easy<br>Maintenance</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-house"></i></div>
                                <span class="fb-feature-text">Trusted<br>Protection</span>
                            </div>
                            <!-- duplicate for seamless loop -->
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-paint-bucket"></i></div>
                                <span class="fb-feature-text">Rich Colour<br>Finish</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-shield-check"></i></div>
                                <span class="fb-feature-text">Long Lasting<br>Beauty</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-stars"></i></div>
                                <span class="fb-feature-text">Easy<br>Maintenance</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-house"></i></div>
                                <span class="fb-feature-text">Trusted<br>Protection</span>
                            </div>
                        </div>
                    </div>
                    <a href="products.php?tab=interior" class="fb-explore-btn">Explore Interior Paints</a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Info Bar -->
        <div class="fb-bottom-bar">
            <div class="fb-bottom-track">
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-check2-circle"></i></div>
                    <div class="fb-b-text"><strong>Premium Quality</strong><span>International Standards</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-tree"></i></div>
                    <div class="fb-b-text"><strong>Low VOC</strong><span>Health Friendly</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-droplet"></i></div>
                    <div class="fb-b-text"><strong>Advanced Technology</strong><span>Superior Performance</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-award"></i></div>
                    <div class="fb-b-text"><strong>Trusted by Thousands</strong><span>Across Nepal</span></div>
                </div>
                <!-- duplicate for seamless loop -->
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-check2-circle"></i></div>
                    <div class="fb-b-text"><strong>Premium Quality</strong><span>International Standards</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-tree"></i></div>
                    <div class="fb-b-text"><strong>Low VOC</strong><span>Health Friendly</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-droplet"></i></div>
                    <div class="fb-b-text"><strong>Advanced Technology</strong><span>Superior Performance</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-award"></i></div>
                    <div class="fb-b-text"><strong>Trusted by Thousands</strong><span>Across Nepal</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECOND FAMILY BANNER SECTION -->
<section class="family-banner-section reverse" style="padding-top: 0;">
    <div class="fb-wrapper">
        <div class="fb-container">
            <div class="fb-content-wrap">
                <div class="fb-left-col">
                    <div class="fb-img-pan-wrap">
                        <img src="assets/home2.jpg" alt="Home Exterior" class="fb-family-img fb-img-pan">
                    </div>
                </div>
                
                <div class="fb-right-col">
                    <div class="fb-logo-wrap">
                        <img src="assets/final_header.png" alt="Rajdoot Paints" class="fb-logo">
                        <span class="fb-tagline">COLOURS OF TRUST</span>
                    </div>
                    
                    <h2 class="fb-title">Beautiful Spaces.<br><span>Beautiful Memories.</span></h2>
                    <p class="fb-desc">Rajdoot Paints brings rich colour, smooth finish and long lasting beauty to every Nepali home.</p>
                    
                    <div class="fb-features-marquee-wrap">
                        <div class="fb-features-grid fb-features-marquee">
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-paint-bucket"></i></div>
                                <span class="fb-feature-text">Rich Colour<br>Finish</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-shield-check"></i></div>
                                <span class="fb-feature-text">Long Lasting<br>Beauty</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-stars"></i></div>
                                <span class="fb-feature-text">Easy<br>Maintenance</span>
                            </div>
                            <div class="fb-feature-item">
                                <div class="fb-icon-circle"><i class="bi bi-house"></i></div>
                                <span class="fb-feature-text">Trusted<br>Protection</span>
                            </div>
                            <!-- duplicate for seamless loop -->
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-paint-bucket"></i></div>
                                <span class="fb-feature-text">Rich Colour<br>Finish</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-shield-check"></i></div>
                                <span class="fb-feature-text">Long Lasting<br>Beauty</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-stars"></i></div>
                                <span class="fb-feature-text">Easy<br>Maintenance</span>
                            </div>
                            <div class="fb-feature-item" aria-hidden="true">
                                <div class="fb-icon-circle"><i class="bi bi-house"></i></div>
                                <span class="fb-feature-text">Trusted<br>Protection</span>
                            </div>
                        </div>
                    </div>

                    <a href="products.php?tab=exterior" class="fb-explore-btn">Explore Exterior Paints</a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Info Bar -->
        <div class="fb-bottom-bar">
            <div class="fb-bottom-track">
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-check2-circle"></i></div>
                    <div class="fb-b-text"><strong>Premium Quality</strong><span>International Standards</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-tree"></i></div>
                    <div class="fb-b-text"><strong>Low VOC</strong><span>Health Friendly</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-droplet"></i></div>
                    <div class="fb-b-text"><strong>Advanced Technology</strong><span>Superior Performance</span></div>
                </div>
                <div class="fb-bottom-item">
                    <div class="fb-b-icon"><i class="bi bi-award"></i></div>
                    <div class="fb-b-text"><strong>Trusted by Thousands</strong><span>Across Nepal</span></div>
                </div>
                <!-- duplicate for seamless loop -->
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-check2-circle"></i></div>
                    <div class="fb-b-text"><strong>Premium Quality</strong><span>International Standards</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-tree"></i></div>
                    <div class="fb-b-text"><strong>Low VOC</strong><span>Health Friendly</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-droplet"></i></div>
                    <div class="fb-b-text"><strong>Advanced Technology</strong><span>Superior Performance</span></div>
                </div>
                <div class="fb-bottom-item" aria-hidden="true">
                    <div class="fb-b-icon"><i class="bi bi-award"></i></div>
                    <div class="fb-b-text"><strong>Trusted by Thousands</strong><span>Across Nepal</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROMISE SECTION -->
<section class="promise-section">
    <div class="ps-wrapper">
        <div class="ps-top-content">
            <div class="ps-left-col">
                <img src="assets/h-section/family_section.png" alt="Family on sofa" class="ps-family-img">
            </div>
            
            <div class="ps-right-col">
                <!-- 3D Decorative Floating Elements -->
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>
                
                <div class="ps-tagline-wrap">
                    <span class="ps-tagline">OUR PROMISE TO EVERY HOME</span>
                    <div class="ps-golden-line"></div>
                </div>
                
                <h2 class="ps-title">Inspired Living.<br><span>Trusted Protection.</span></h2>
                
                <p class="ps-desc">At Rajdoot Paints, we combine advanced technology with premium quality to deliver paints that protect your walls and bring your spaces to life.</p>
                <a href="#" class="ps-explore-btn">Discover More</a>
            </div>
        </div>
        
        <!-- Bottom Card -->
        <div class="ps-bottom-card">
            <div class="ps-card-tagline-wrap">
                <span class="ps-card-tagline">BUILT ON TRUST. CHOSEN ACROSS NEPAL.</span>
                <div class="ps-golden-line center"></div>
            </div>
            
            <div class="ps-features-wrap">
                <div class="ps-features-grid">
                    <div class="ps-feature-item">
                        <div class="ps-icon-circle"><i class="bi bi-shield-check" style="color: #27AE60;"></i></div>
                        <h3 class="ps-feature-title">Long Lasting Protection</h3>
                        <p class="ps-feature-desc">Durable paints that protect your home from weather, dust and time.</p>
                    </div>
                    <div class="ps-feature-item">
                        <div class="ps-icon-circle"><i class="bi bi-tree" style="color: #6FCF97;"></i></div>
                        <h3 class="ps-feature-title">Low Odour & Eco Friendly</h3>
                        <p class="ps-feature-desc">Safe for your family and better for the environment.</p>
                    </div>
                    <div class="ps-feature-item">
                        <div class="ps-icon-circle"><i class="bi bi-paint-bucket" style="color: #BB6BD9;"></i></div>
                        <h3 class="ps-feature-title">Rich & Smooth Finish</h3>
                        <p class="ps-feature-desc">Beautiful shades with a smooth finish that lasts.</p>
                    </div>
                    <div class="ps-feature-item">
                        <div class="ps-icon-circle"><i class="bi bi-award" style="color: #F2C94C;"></i></div>
                        <h3 class="ps-feature-title">Trusted by Thousands</h3>
                        <p class="ps-feature-desc">A brand Nepal trusts for quality, performance and beautiful spaces.</p>
                    </div>
                </div>
            </div>
            
            <div class="ps-stats-bar">
                <div class="ps-stats-track">
                    <!-- Original Items -->
                    <div class="ps-stat-item">
                        <div class="ps-stat-icon"><i class="bi bi-calendar2-check" style="color: #F2994A;"></i></div>
                        <div class="ps-stat-text">
                            <strong>15+</strong>
                            <span>Years of Experience</span>
                        </div>
                    </div>
                    <div class="ps-stat-item">
                        <div class="ps-stat-icon"><i class="bi bi-shop" style="color: #2D9CDB;"></i></div>
                        <div class="ps-stat-text">
                            <strong>500+</strong>
                            <span>Dealers Nationwide</span>
                        </div>
                    </div>
                    <div class="ps-stat-item">
                        <div class="ps-stat-icon"><i class="bi bi-person-fill-gear" style="color: #27AE60;"></i></div>
                        <div class="ps-stat-text">
                            <strong>1000+</strong>
                            <span>Skilled Painters</span>
                        </div>
                    </div>
                    <div class="ps-stat-item">
                        <div class="ps-stat-icon"><i class="bi bi-house-heart" style="color: #EB5757;"></i></div>
                        <div class="ps-stat-text">
                            <strong>Thousands</strong>
                            <span>Happy Homes</span>
                        </div>
                    </div>
                    
                    <!-- Duplicated Items for Seamless Loop -->
                    <div class="ps-stat-item" aria-hidden="true">
                        <div class="ps-stat-icon"><i class="bi bi-calendar2-check" style="color: #F2994A;"></i></div>
                        <div class="ps-stat-text">
                            <strong>15+</strong>
                            <span>Years of Experience</span>
                        </div>
                    </div>
                    <div class="ps-stat-item" aria-hidden="true">
                        <div class="ps-stat-icon"><i class="bi bi-shop" style="color: #2D9CDB;"></i></div>
                        <div class="ps-stat-text">
                            <strong>500+</strong>
                            <span>Dealers Nationwide</span>
                        </div>
                    </div>
                    <div class="ps-stat-item" aria-hidden="true">
                        <div class="ps-stat-icon"><i class="bi bi-person-fill-gear" style="color: #27AE60;"></i></div>
                        <div class="ps-stat-text">
                            <strong>1000+</strong>
                            <span>Skilled Painters</span>
                        </div>
                    </div>
                    <div class="ps-stat-item" aria-hidden="true">
                        <div class="ps-stat-icon"><i class="bi bi-house-heart" style="color: #EB5757;"></i></div>
                        <div class="ps-stat-text">
                            <strong>Thousands</strong>
                            <span>Happy Homes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRO LEVEL SWIPER SLIDESHOW SECTION -->
<section class="bottom-slideshow-section">
    <div class="slideshow-header">
        <h2 class="slideshow-title">Our <span class="highlight-anim">Moments</span> Highlights</h2>
    </div>
    <div class="swiper pro-slideshow">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-1">
                <span class="placeholder-text">Swipe / Drag Image 1</span>
            </div>
            <div class="swiper-slide slide-2">
                <span class="placeholder-text">Swipe / Drag Image 2</span>
            </div>
            <div class="swiper-slide slide-3">
                <span class="placeholder-text">Swipe / Drag Image 3</span>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>
