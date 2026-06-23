<?php
require_once __DIR__ . '/../data/dealers.php';
$dealers = $allDealers;

$provinceList = ['Sudurpashchim', 'Karnali', 'Lumbini', 'Gandaki', 'Bagmati', 'Madhesh', 'Koshi'];
?>

<section class="dealer-page-section" id="dealers">
<div class="dealer-page-container">

    <!-- Heading -->
    <div class="dealer-cat-header">
        <span class="dealer-eyebrow">Find Us Near You</span>
        <h2 class="dealer-cat-title">Our Dealer Network Across Nepal</h2>
        <p class="dealer-cat-sub">From Kathmandu to the Terai, Rajdoot dealers bring trusted paints and expert advice to every region.</p>
    </div>

    <!-- Filter bar -->
    <div class="dealer-filter-bar">
        <button class="dealer-filter-btn active" data-filter="all">All Regions</button>
        <?php foreach ($provinceList as $province): ?>
        <button class="dealer-filter-btn" data-filter="<?php echo htmlspecialchars($province, ENT_QUOTES); ?>"><?php echo $province; ?></button>
        <?php endforeach; ?>
    </div>

    <!-- Dealer directory grid -->
    <div class="dealer-grid" id="dealerGrid">
        <?php foreach ($dealers as $slug => $d): ?>
        <a href="dealer-detail.php?d=<?php echo $slug; ?>" class="dealer-card" data-province="<?php echo htmlspecialchars($d['province'], ENT_QUOTES); ?>" style="--theme-color:<?php echo $d['theme_color']; ?>;">
            <div class="dealer-card-body">
                <span class="dealer-card-province"><i class="ph-light ph-map-trifold"></i><?php echo $d['province']; ?></span>
                <h4 class="dealer-card-name"><?php echo htmlspecialchars($d['name'], ENT_QUOTES); ?></h4>
                <p class="dealer-card-address"><i class="ph-light ph-map-pin"></i><?php echo htmlspecialchars($d['address'], ENT_QUOTES); ?></p>
                <p class="dealer-card-phone"><i class="ph-light ph-phone"></i><?php echo htmlspecialchars($d['phone'], ENT_QUOTES); ?></p>
                <span class="dealer-card-link">View Details</span>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Become a Dealer CTA -->
    <div class="dealer-cta-banner">
        <div class="dealer-cta-text">
            <h3>Want to Become a Rajdoot Dealer?</h3>
            <p>Join our growing network of trusted partners and bring premium paints to your community.</p>
        </div>
        <a href="become-dealer.php" class="dealer-cta-btn"><i class="bi bi-handshake"></i> Apply Now</a>
    </div>

</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.dealer-filter-btn');
    const cards = document.querySelectorAll('.dealer-card');

    function applyFilter(province) {
        cards.forEach(card => {
            const match = province === 'all' || card.getAttribute('data-province') === province;
            card.style.display = match ? '' : 'none';
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            applyFilter(btn.getAttribute('data-filter'));
        });
    });
});
</script>
