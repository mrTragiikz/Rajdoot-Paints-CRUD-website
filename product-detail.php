<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail | Rajdoot Paints</title>

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
    <link rel="stylesheet" href="css/pc/product-detail.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/product-detail.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/footer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/footer.css" media="screen and (max-width: 1024px)">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<?php
// All product data
$allProducts = [
    'tiger-interior-emulsion' => [
        'title'=>'Tiger Interior Emulsion','category'=>'Interior Paints','badge'=>'Best Seller','theme_color'=>'#E07B00',
        'image'=>'assets/products-clean/tiger-interior-emulsion.png',
        'desc'=>'Transform your living spaces with Tiger Interior Emulsion and a premium water-based paint that delivers a breathtakingly smooth, silk-like finish on every interior wall.',
        'long_desc'=>'Engineered for modern homes, Tiger Interior Emulsion combines rich colour depth with outstanding durability. Its advanced washable formula means everyday scuffs, fingerprints and stains wipe away effortlessly with a damp cloth. The low-sheen finish beautifully conceals minor surface imperfections, giving your walls a flawless, freshly-painted look that lasts for years. Low VOC formulation keeps indoor air clean and safe for your entire family.',
        'features'=>[
            ['icon'=>'bi bi-stars','color'=>'#f59e0b','title'=>'Smooth Finish','desc'=>'Silk-like texture that makes every wall look professionally painted.'],
            ['icon'=>'bi bi-droplet-fill','color'=>'#3b82f6','title'=>'Washable','desc'=>'Stains and marks wipe off easily with a damp cloth.'],
            ['icon'=>'bi bi-shield-fill-check','color'=>'#10b981','title'=>'Long Lasting','desc'=>'Vibrant colour stays beautiful for years without fading.'],
            ['icon'=>'bi bi-leaf-fill','color'=>'#22c55e','title'=>'Low VOC','desc'=>'Safe for families, children and indoor air quality.'],
            ['icon'=>'bi bi-brush-fill','color'=>'#8b5cf6','title'=>'Easy Apply','desc'=>'Smooth flow and excellent coverage in a single coat.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'120 to 140 sq ft per litre'],['label'=>'Drying Time','value'=>'30 minutes touch dry'],['label'=>'Recoat Time','value'=>'4 hours'],['label'=>'Finish','value'=>'Matt / Low Sheen'],['label'=>'Thinning','value'=>'10 to 20% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'tiger-acrylic-distemper' => [
        'title'=>'Tiger Acrylic Distemper','category'=>'Interior Paints','badge'=>'','theme_color'=>'#1B2A6B',
        'image'=>'assets/products-clean/tiger-distemper.png',
        'desc'=>'Tiger Acrylic Distemper brings clean, elegant matt walls within every budget and delivering a professional finish without compromise on quality or appearance.',
        'long_desc'=>'Designed for homeowners and contractors who demand great results at a smart price, Tiger Acrylic Distemper goes on smoothly with a brush or roller and dries to a uniform, glare-free matt finish. It offers excellent opacity, covering surface marks and uneven tones in fewer coats. From freshly plastered walls to repaints, it adapts beautifully to any interior surface and creates a calm, refined atmosphere in every room.',
        'features'=>[
            ['icon'=>'bi bi-check-circle-fill','color'=>'#10b981','title'=>'Great Coverage','desc'=>'Hides surface imperfections and uneven tones with ease.'],
            ['icon'=>'bi bi-circle-fill','color'=>'#6366f1','title'=>'Matt Finish','desc'=>'Elegant flat finish that reduces glare and looks refined.'],
            ['icon'=>'bi bi-wind','color'=>'#06b6d4','title'=>'Low Odour','desc'=>'Comfortable to apply indoors with minimal disturbance.'],
            ['icon'=>'bi bi-brush','color'=>'#f97316','title'=>'Easy Apply','desc'=>'Works beautifully with brush or roller on any surface.'],
            ['icon'=>'bi bi-clock-fill','color'=>'#eab308','title'=>'Fast Dry','desc'=>'Touch dry in just 30 minutes so you can recoat quickly.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'130 to 150 sq ft per litre'],['label'=>'Drying Time','value'=>'30 minutes touch dry'],['label'=>'Recoat Time','value'=>'3 hours'],['label'=>'Finish','value'=>'Matt'],['label'=>'Thinning','value'=>'15 to 20% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'tiger-interior-cement-primer' => [
        'title'=>'Tiger Interior Cement Primer','category'=>'Interior Paints','badge'=>'','theme_color'=>'#C47AB0',
        'image'=>'assets/products-clean/tiger-interior-primer.png',
        'desc'=>'A flawless topcoat starts with Tiger Interior Cement Primer and the professional-grade foundation that seals, strengthens and prepares every interior surface for a perfect finish.',
        'long_desc'=>'Skipping primer is the single most costly mistake in any paint job. Tiger Interior Cement Primer penetrates deep into fresh plaster and cement, neutralising harsh alkali that would otherwise cause paint to peel and blister within months. It seals micro-pores for perfectly uniform topcoat absorption, so your finish paint looks richer and lasts far longer. Its anti-fungal properties are essential for kitchens, bathrooms and any moisture-prone area.',
        'features'=>[
            ['icon'=>'bi bi-link-45deg','color'=>'#f59e0b','title'=>'Strong Bond','desc'=>'Creates a powerful anchor between surface and topcoat.'],
            ['icon'=>'bi bi-bricks','color'=>'#78716c','title'=>'Seals Surface','desc'=>'Fills micro-pores for even, uniform paint absorption.'],
            ['icon'=>'bi bi-shield-fill-exclamation','color'=>'#ef4444','title'=>'Alkali Resistant','desc'=>'Neutralises harsh alkali in fresh plaster and cement.'],
            ['icon'=>'bi bi-bug-fill','color'=>'#84cc16','title'=>'Anti-Fungal','desc'=>'Actively prevents mould and mildew from forming.'],
            ['icon'=>'bi bi-lightning-fill','color'=>'#f97316','title'=>'Fast Dry','desc'=>'Ready for topcoat in just 4 hours.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'140 to 160 sq ft per litre'],['label'=>'Drying Time','value'=>'1 hour touch dry'],['label'=>'Recoat Time','value'=>'4 hours'],['label'=>'Finish','value'=>'Matt'],['label'=>'Thinning','value'=>'10 to 20% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'home-protect-exterior-emulsion' => [
        'title'=>'Home Protect Exterior Emulsion','category'=>'Exterior Paints','badge'=>'Popular','theme_color'=>'#5B2D8E',
        'image'=>'assets/products-clean/home-protect-emulsion.png',
        'desc'=>'Give your home a stunning exterior that fights back against the elements. Home Protect Exterior Emulsion is engineered to keep walls looking vibrant and fresh through every season.',
        'long_desc'=>'From intense monsoon rains to blazing summer heat, Home Protect Exterior Emulsion stands firm where ordinary paints fail. Its breathable film releases trapped moisture vapour while forming an impenetrable barrier against liquid water, eliminating bubbling and peeling. Built-in UV blockers prevent colour fade, while advanced anti-algae and anti-fungal technology keeps walls clean and beautiful even through humid monsoon months. A single application delivers over five years of stunning, protected walls.',
        'features'=>[
            ['icon'=>'bi bi-sun-fill','color'=>'#f59e0b','title'=>'UV Resistant','desc'=>'Advanced UV blockers prevent colour fade in direct sunlight.'],
            ['icon'=>'bi bi-droplet-half','color'=>'#3b82f6','title'=>'Water Repellent','desc'=>'Rain beads off the wall surface rather than soaking in.'],
            ['icon'=>'bi bi-award-fill','color'=>'#8b5cf6','title'=>'5 Year Protection','desc'=>'Guaranteed colour retention and surface protection for 5 years.'],
            ['icon'=>'bi bi-cloud-rain-fill','color'=>'#06b6d4','title'=>'Monsoon Ready','desc'=>'Tested and proven through Nepal\'s heavy monsoon rainfall.'],
            ['icon'=>'bi bi-tree-fill','color'=>'#22c55e','title'=>'Anti-Algae','desc'=>'Resists green algae and fungal growth year round.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'100 to 120 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'6 hours'],['label'=>'Finish','value'=>'Low Sheen'],['label'=>'Thinning','value'=>'10% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'tiger-exterior-emulsion' => [
        'title'=>'Tiger Exterior Emulsion','category'=>'Exterior Paints','badge'=>'','theme_color'=>'#00478F',
        'image'=>'assets/products-clean/tiger-exterior-emulsion.png',
        'desc'=>'Tiger Exterior Emulsion is built to withstand the toughest outdoor conditions and keeping your exterior walls looking rich, vibrant and completely protected year after year.',
        'long_desc'=>'Walls face relentless punishment from rain, heat, frost and UV exposure. Tiger Exterior Emulsion is formulated with high-performance polymer technology that bonds tenaciously to new and old plastered surfaces alike. Its flexible film expands and contracts with the substrate through temperature changes, preventing cracking and flaking. Colour pigments are UV-stabilised to stay vivid through years of harsh sunlight, while built-in biocides resist algae growth throughout the monsoon season.',
        'features'=>[
            ['icon'=>'bi bi-cloud-rain-heavy-fill','color'=>'#3b82f6','title'=>'Monsoon Ready','desc'=>'Withstands heavy rainfall and sustained humidity.'],
            ['icon'=>'bi bi-brightness-high-fill','color'=>'#f59e0b','title'=>'UV Guard','desc'=>'UV-stabilised pigments prevent colour fading.'],
            ['icon'=>'bi bi-house-fill','color'=>'#6366f1','title'=>'Wall Shield','desc'=>'Comprehensive protection from all outdoor elements.'],
            ['icon'=>'bi bi-tree','color'=>'#22c55e','title'=>'Anti-Algae','desc'=>'Biocide technology resists green algae all season.'],
            ['icon'=>'bi bi-calendar-check-fill','color'=>'#10b981','title'=>'Multi-Year Life','desc'=>'Superior durability that outlasts ordinary exterior paints.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'110 to 130 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'6 hours'],['label'=>'Finish','value'=>'Low Sheen'],['label'=>'Thinning','value'=>'10% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'tiger-exterior-cement-primer' => [
        'title'=>'Tiger Exterior Cement Primer','category'=>'Exterior Paints','badge'=>'New','theme_color'=>'#4A7C59',
        'image'=>'assets/products-clean/tiger-cement-primer.png',
        'desc'=>'Set the foundation for a paint finish that truly lasts. Tiger Exterior Cement Primer creates a powerful, high-build base on masonry and concrete that dramatically extends the life of your topcoat.',
        'long_desc'=>'New concrete and masonry surfaces are porous, rough and loaded with alkali and the perfect recipe for premature paint failure. Tiger Exterior Cement Primer\'s high-build formula penetrates the surface deeply, filling pores, bridging fine cracks and creating a smooth, consolidated base layer. Once applied, your topcoat adheres with exceptional strength, resists moisture ingress and delivers a uniform, professional finish that stands up to years of outdoor exposure.',
        'features'=>[
            ['icon'=>'bi bi-link','color'=>'#f97316','title'=>'Strong Bond','desc'=>'Adheres powerfully to concrete, brick and masonry.'],
            ['icon'=>'bi bi-bricks','color'=>'#78716c','title'=>'Masonry Fill','desc'=>'High-build formula fills pores and fine surface cracks.'],
            ['icon'=>'bi bi-shield-shaded','color'=>'#3b82f6','title'=>'Weather Guard','desc'=>'Seals surface against moisture and temperature stress.'],
            ['icon'=>'bi bi-hexagon-fill','color'=>'#ef4444','title'=>'Alkali Safe','desc'=>'Neutralises aggressive alkali in fresh cement.'],
            ['icon'=>'bi bi-lightning-charge-fill','color'=>'#eab308','title'=>'Fast Cure','desc'=>'Cures efficiently even in humid conditions.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'90 to 110 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'8 hours'],['label'=>'Finish','value'=>'Matt'],['label'=>'Thinning','value'=>'10% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'weather-protect-exterior-cement' => [
        'title'=>'Weather Protect Exterior Cement','category'=>'Exterior Paints','badge'=>'','theme_color'=>'#9A1616',
        'image'=>'assets/products-clean/weather-protect-primer.png',
        'desc'=>'Weather Protect Exterior Cement is the ultimate high-build primer for demanding masonry projects and bonding at depth, bridging cracks and forming an impenetrable base for any exterior paint system.',
        'long_desc'=>'Combining Portland cement with advanced polymer binders, this high-performance primer fills hairline cracks, unifies rough concrete surfaces and provides exceptional alkaline resistance. It cures harder and stronger in humid conditions, making it perfectly suited to Nepal\'s monsoon climate. Whether you are working on a fresh concrete structure, old brick walls or rough masonry, Weather Protect creates a solid, long-lasting foundation that multiplies the durability of every topcoat applied above it.',
        'features'=>[
            ['icon'=>'bi bi-arrow-down-circle-fill','color'=>'#8b5cf6','title'=>'Deep Penetration','desc'=>'Bonds with the substrate at a molecular level.'],
            ['icon'=>'bi bi-shield-fill-plus','color'=>'#10b981','title'=>'Crack Bridging','desc'=>'Bridges hairline cracks for a unified smooth base.'],
            ['icon'=>'bi bi-house-check-fill','color'=>'#f59e0b','title'=>'High Protection','desc'=>'Seals substrate completely against moisture ingress.'],
            ['icon'=>'bi bi-layers-fill','color'=>'#3b82f6','title'=>'Masonry Fill','desc'=>'High-build formula consolidates porous rough surfaces.'],
            ['icon'=>'bi bi-thermometer-sun','color'=>'#ef4444','title'=>'Climate Cure','desc'=>'Cures stronger under humid monsoon conditions.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'80 to 100 sq ft per litre'],['label'=>'Drying Time','value'=>'4 hours touch dry'],['label'=>'Recoat Time','value'=>'12 hours'],['label'=>'Finish','value'=>'Matt / Textured'],['label'=>'Thinning','value'=>'5% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'weather-block-exterior-cement-primer' => [
        'title'=>'Weather Block Exterior Cement Primer','category'=>'Undercoats','badge'=>'New','theme_color'=>'#5B2D8E',
        'image'=>'assets/products-clean/weather-block-primer.png',
        'desc'=>'Our most advanced exterior primer. Weather Block Exterior Cement Primer creates an impenetrable defensive barrier that protects walls against rain, alkali, UV and extreme temperature swings for years on end.',
        'long_desc'=>'When the stakes are high, Weather Block is the professional\'s first choice. Its polymer-reinforced cement formula penetrates deep into the substrate, forming a dense molecular bond that dramatically improves topcoat adhesion. Suitable for new cement plaster, aged concrete, brick and block construction and it performs equally on high-altitude Himalayan structures and low-lying Terai buildings. One thorough application locks in protection that outlasts multiple paint cycles, making it the smartest long-term investment for any exterior surface.',
        'features'=>[
            ['icon'=>'bi bi-cloud-lightning-rain-fill','color'=>'#3b82f6','title'=>'All-Weather Guard','desc'=>'Resists rain, UV and humidity across every season.'],
            ['icon'=>'bi bi-shield-fill-check','color'=>'#10b981','title'=>'Alkali Neutraliser','desc'=>'Eliminates harmful alkali from fresh cement instantly.'],
            ['icon'=>'bi bi-infinity','color'=>'#8b5cf6','title'=>'Extended Lifecycle','desc'=>'Significantly extends the lifespan of your full paint system.'],
            ['icon'=>'bi bi-radioactive','color'=>'#f97316','title'=>'Deep Bond','desc'=>'Molecular-level penetration for unbreakable adhesion.'],
            ['icon'=>'bi bi-thermometer-half','color'=>'#ef4444','title'=>'Heat Stable','desc'=>'Stable performance across extreme temperature ranges.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'90 to 110 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'8 hours'],['label'=>'Finish','value'=>'Matt'],['label'=>'Thinning','value'=>'10% water']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'rajdoot-synthetic-primer' => [
        'title'=>'Rajdoot Synthetic Primer','category'=>'Undercoats','badge'=>'','theme_color'=>'#C62828',
        'image'=>'assets/products-clean/synthetic-enamel.png',
        'desc'=>'Rajdoot Synthetic Primer is the trusted first coat for wood and metal and delivering powerful rust protection, outstanding adhesion and a rock-solid foundation for any gloss or enamel topcoat.',
        'long_desc'=>'Metal gates, window grilles, furniture frames and structural steelwork all share one common enemy: corrosion. Rajdoot Synthetic Primer forms a dense anti-corrosive film that cuts off the oxygen and moisture supply rust needs to form. On wood, it penetrates deeply into the grain, sealing fibers and preventing moisture absorption that leads to swelling and cracking. Its exceptional adhesion ensures your topcoat bonds perfectly, producing a smoother, more durable surface finish that professional painters rely on every day.',
        'features'=>[
            ['icon'=>'bi bi-shield-fill-x','color'=>'#ef4444','title'=>'Anti-Rust','desc'=>'Dense anti-corrosive film eliminates rust on all metals.'],
            ['icon'=>'bi bi-link-45deg','color'=>'#f97316','title'=>'Superior Bond','desc'=>'Outstanding adhesion on metal, wood and composite surfaces.'],
            ['icon'=>'bi bi-brush-fill','color'=>'#8b5cf6','title'=>'Versatile Apply','desc'=>'Apply by brush, roller or spray gun with equal results.'],
            ['icon'=>'bi bi-hourglass-split','color'=>'#06b6d4','title'=>'Fast Dry','desc'=>'Touch dry in 1 hour so work progresses without waiting.'],
            ['icon'=>'bi bi-hammer','color'=>'#78716c','title'=>'Hard Film','desc'=>'Creates a tough, resilient base for any topcoat.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'110 to 130 sq ft per litre'],['label'=>'Drying Time','value'=>'1 hour touch dry'],['label'=>'Recoat Time','value'=>'6 hours'],['label'=>'Finish','value'=>'Matt'],['label'=>'Thinning','value'=>'5 to 10% mineral spirit']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'premium-gloss-enamel' => [
        'title'=>'Premium Gloss Enamel','category'=>'Wood & Metal','badge'=>'Popular','theme_color'=>'#1B2A6B',
        'image'=>'assets/products-clean/premium-gloss-enamel.png',
        'desc'=>'Rajdoot Premium Gloss Enamel is the hallmark of luxury finishing and delivering a breathtaking mirror-like shine on wood and metal that instantly elevates every surface it touches.',
        'long_desc'=>'From grand entrance doors to elegant furniture and window frames, Premium Gloss Enamel transforms ordinary surfaces into striking design statements. Its self-levelling formula flows on beautifully, eliminating brush marks and creating a perfectly smooth high-gloss film that reflects light brilliantly. The hard enamel coating resists scratches, chips and moisture with ease, while built-in anti-rust additives protect metal substrates from corrosion. Colour stays vivid and true for years, making this the lasting choice for every premium interior and exterior surface.',
        'features'=>[
            ['icon'=>'bi bi-stars','color'=>'#f59e0b','title'=>'Mirror Gloss','desc'=>'Brilliant high-gloss finish that reflects light like a mirror.'],
            ['icon'=>'bi bi-magic','color'=>'#8b5cf6','title'=>'Self-Levelling','desc'=>'Brush marks disappear for a streak-free flawless result.'],
            ['icon'=>'bi bi-shield-fill-check','color'=>'#10b981','title'=>'Anti-Rust','desc'=>'Protects metal surfaces from corrosion and oxidation.'],
            ['icon'=>'bi bi-gem','color'=>'#3b82f6','title'=>'Hard Film','desc'=>'Chip and scratch resistant enamel that endures daily use.'],
            ['icon'=>'bi bi-clock-history','color'=>'#f97316','title'=>'Colour Retention','desc'=>'Rich colour stays vibrant for years without dulling.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'100 to 120 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'6 to 8 hours'],['label'=>'Finish','value'=>'High Gloss'],['label'=>'Thinning','value'=>'5 to 10% mineral spirit']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],

    'tiger-synthetic-enamel' => [
        'title'=>'Tiger Synthetic Enamel','category'=>'Wood & Metal','badge'=>'','theme_color'=>'#7B2D8B',
        'image'=>'assets/products-clean/tiger-synthetic-enamel.png',
        'desc'=>'Tiger Synthetic Enamel delivers a brilliant, high-gloss finish on wood and metal with vivid colour and outstanding chip resistance and the preferred choice of professional painters across Nepal.',
        'long_desc'=>'Whether you are finishing interior furniture, exterior railings or decorative metalwork, Tiger Synthetic Enamel\'s excellent flow and self-levelling properties produce a flawlessly smooth, professional result every time. The high-gloss film seals wood against moisture ingress and shields metal from rust, significantly extending the lifespan of treated surfaces. UV-stabilised colour pigments ensure the finish stays bold and vibrant through years of indoor and outdoor exposure, while the hard enamel film resists the chips and wear of daily life.',
        'features'=>[
            ['icon'=>'bi bi-brilliance','color'=>'#f59e0b','title'=>'Brilliant Gloss','desc'=>'Stunning high-gloss finish that commands attention.'],
            ['icon'=>'bi bi-palette-fill','color'=>'#ec4899','title'=>'Vivid Colours','desc'=>'Rich UV-stabilised pigments stay bold year after year.'],
            ['icon'=>'bi bi-shield-shaded','color'=>'#6366f1','title'=>'Chip Resistant','desc'=>'Hard enamel film resists everyday chips and wear.'],
            ['icon'=>'bi bi-moisture','color'=>'#06b6d4','title'=>'Moisture Proof','desc'=>'Seals wood completely against moisture absorption.'],
            ['icon'=>'bi bi-layout-wtf','color'=>'#10b981','title'=>'Smooth Finish','desc'=>'Self-levelling formula delivers a perfectly even surface.'],
        ],
        'specs'=>[['label'=>'Coverage','value'=>'100 to 120 sq ft per litre'],['label'=>'Drying Time','value'=>'2 hours touch dry'],['label'=>'Recoat Time','value'=>'6 hours'],['label'=>'Finish','value'=>'High Gloss'],['label'=>'Thinning','value'=>'5 to 10% mineral spirit']],
        'sizes'=>['1 Ltr','4 Ltr','10 Ltr','20 Ltr']],
];

$slug = $_GET['p'] ?? '';
$p = $allProducts[$slug] ?? null;

if (!$p) {
    header('Location: products.php');
    exit;
}
?>

<main style="padding-top: 100px;">
<div class="pd-page" style="--theme-color: <?php echo $p['theme_color']; ?>">

    <!-- Back breadcrumb -->
    <div class="pd-breadcrumb">
        <div class="pd-breadcrumb-inner">
            <a href="products.php"><i class="bi bi-arrow-left"></i> Back to Products</a>
            <span class="pd-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="pd-breadcrumb-mid"><?php echo $p['category']; ?></span>
            <span class="pd-breadcrumb-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="pd-breadcrumb-current"><?php echo $p['title']; ?></span>
        </div>
    </div>

    <!-- Hero split -->
    <div class="pd-hero">

        <!-- Left: image -->
        <div class="pd-img-side">
            <div class="pd-img-glow"></div>
            <div class="pd-img-rings">
                <span class="pd-ring pd-ring-1"></span>
                <span class="pd-ring pd-ring-2"></span>
                <span class="pd-ring pd-ring-3"></span>
            </div>
            <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>" class="pd-product-img" id="pdImg">
        </div>

        <!-- Right: info -->
        <div class="pd-info-side">
            <span class="pd-category" id="pdAnim1"><span class="pd-category-dot"></span><?php echo $p['category']; ?></span>
            <h1 class="pd-title" id="pdAnim2"><?php echo $p['title']; ?></h1>
            <p class="pd-desc" id="pdAnim3"><?php echo $p['desc']; ?></p>
            <p class="pd-long-desc" id="pdAnim4"><?php echo $p['long_desc']; ?></p>

            <!-- Specs table -->
            <div class="pd-specs" id="pdAnim5">
                <?php foreach($p['specs'] as $s): ?>
                <div class="pd-spec-row">
                    <span class="pd-spec-label"><?php echo $s['label']; ?></span>
                    <span class="pd-spec-value"><?php echo $s['value']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if(!empty($p['sizes'])): ?>
            <div class="pd-pack-sizes" id="pdAnim6b">
                <div class="pd-pack-label">Available Pack Sizes</div>
                <div class="pd-pack-list">
                    <?php foreach($p['sizes'] as $sz): ?>
                    <span class="pd-pack-item"><?php echo $sz; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <div class="pd-cta-row" id="pdAnim6">
                <a href="index.php#contact" class="pd-btn-primary"><i class="bi bi-telephone-fill"></i> Enquire Now</a>
                <a href="products.php" class="pd-btn-ghost"><span><i class="bi bi-grid-fill"></i> View All Products</span></a>
            </div>
        </div>
    </div>

    <!-- Features section -->
    <div class="pd-features-section">
        <h2 class="pd-features-heading">Key Features</h2>
        <div class="pd-features-grid">
            <?php foreach(array_merge($p['features'], $p['features']) as $i => $f): ?>
            <div class="pd-feature-card" style="--i:<?php echo $i; ?>; --icon-color:<?php echo $f['color']; ?>" <?php if($i >= count($p['features'])): ?>aria-hidden="true"<?php endif; ?>>
                <div class="pd-feature-icon-wrap">
                    <i class="<?php echo $f['icon']; ?>" style="color:<?php echo $f['color']; ?>"></i>
                </div>
                <h4 class="pd-feature-title"><?php echo $f['title']; ?></h4>
                <p class="pd-feature-desc"><?php echo $f['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js" defer></script>
<script src="Java/main.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Animate info items immediately — no delay
    const items = ['pdAnim1','pdAnim2','pdAnim3','pdAnim4','pdAnim5','pdAnim6'];
    items.forEach((id, i) => {
        const el = document.getElementById(id);
        if (el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(18px)';
            el.style.transition = 'opacity 0.4s ease, transform 0.4s cubic-bezier(0.22,1,0.36,1)';
            requestAnimationFrame(() => requestAnimationFrame(() => {
                el.style.transitionDelay = (i * 50) + 'ms';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }));
        }
    });

    // Spec rows
    document.querySelectorAll('.pd-spec-row').forEach((row, i) => {
        row.style.opacity = '0';
        row.style.transform = 'translateX(14px)';
        row.style.transition = 'opacity 0.35s ease, transform 0.35s cubic-bezier(0.22,1,0.36,1)';
        requestAnimationFrame(() => requestAnimationFrame(() => {
            row.style.transitionDelay = (200 + i * 40) + 'ms';
            row.style.opacity = '1';
            row.style.transform = 'translateX(0)';
        }));
    });
});
</script>
</body>
</html>


