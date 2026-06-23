<?php
// Showcase event data — placeholder until admin dashboard is built
require_once __DIR__ . '/../data/events.php';
$events = $allEvents;
?>

<section class="event-page-section" id="events">
<div class="event-page-container">

    <!-- Heading -->
    <div class="event-cat-header">
        <span class="event-eyebrow">What's Happening</span>
        <h2 class="event-cat-title">Rajdoot Events & Happenings</h2>
        <p class="event-cat-sub">Stay connected with dealer meets, workshops and campaigns from Rajdoot Paints Nepal.</p>
    </div>

    <!-- Events grid -->
    <div class="event-page-grid">
        <?php $i = 0; foreach($events as $slug => $e): ?>
        <a href="event-detail.php?e=<?php echo $slug; ?>" class="event-page-card" style="--i:<?php echo $i++; ?>; --theme-color:<?php echo $e['theme_color']; ?>;">
            <div class="event-page-img-wrap">
                <img src="<?php echo $e['image']; ?>" alt="<?php echo $e['title']; ?>" class="event-page-img">
                <?php if(!empty($e['badge'])): ?>
                <span class="event-card-badge"><?php echo $e['badge']; ?></span>
                <?php endif; ?>
            </div>
            <div class="event-page-card-body">
                <div class="event-page-meta">
                    <span class="event-page-date"><i class="ph-light ph-calendar-blank"></i><?php echo $e['date']; ?></span>
                    <span class="event-page-location"><i class="ph-light ph-map-pin"></i><?php echo $e['location']; ?></span>
                </div>
                <h4 class="event-page-card-title"><?php echo $e['title']; ?></h4>
                <p class="event-page-card-desc"><?php echo $e['desc']; ?></p>
                <span class="event-page-link">View Details</span>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

</div>
</section>
