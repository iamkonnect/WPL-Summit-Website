<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<!-- Hero Section -->
<section class="wpl-hero">
    <div class="container">
        <h1>WPL Summit 2026</h1>
        <p>Women Political Leaders Global Summit</p>
        <p><strong>September 15-17, 2026</strong> | <strong>Kigali Convention Center, Rwanda</strong></p>
        
        <!-- Countdown Timer -->
        <div class="countdown-timer">
            <div class="countdown-item">
                <span class="countdown-number" id="days">00</span>
                <span class="countdown-label">Days</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="hours">00</span>
                <span class="countdown-label">Hours</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">00</span>
                <span class="countdown-label">Minutes</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">00</span>
                <span class="countdown-label">Seconds</span>
            </div>
        </div>
        
        <div class="wpl-hero-buttons">
            <a href="/register" class="btn-wpl-primary">Register Now</a>
            <a href="/agenda" class="btn-wpl-secondary">View Agenda</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="wpl-section">
    <div class="container">
        <div class="section-title">
            <h2>About WPL Summit 2026</h2>
            <p>Leading with Purpose: Shaping Inclusive Futures</p>
        </div>
        <div class="about-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p>The Women Political Leaders (WPL) Summit 2026 is the premier global gathering of women in political leadership. This year's theme, <strong>"Leading with Purpose: Shaping Inclusive Futures"</strong>, brings together heads of state, government ministers, parliamentarians, and emerging leaders from across the political spectrum.</p>
            <p>Over three days, participants will engage in high-level dialogues, strategic workshops, and networking sessions focused on addressing the world's most pressing challenges through the lens of women's leadership and inclusive governance.</p>
        </div>
    </div>
</section>

<!-- Speakers Section -->
<section class="wpl-section wpl-section-light">
    <div class="container">
        <div class="section-title">
            <h2>Featured Speakers</h2>
            <p>Meet the influential leaders joining WPL Summit 2026</p>
        </div>
        <div class="speakers-grid" id="speakers-container">
            <!-- Speakers will be loaded via JavaScript -->
            <div class="loading">Loading speakers...</div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="/speakers" class="btn-wpl-primary">View All Speakers</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="wpl-section wpl-section-dark">
    <div class="container">
        <div class="section-title">
            <h2>Join Us at WPL Summit 2026</h2>
            <p>Be part of this transformative experience</p>
        </div>
        <div style="text-align: center;">
            <a href="/register" class="btn-wpl-primary">Register Now</a>
        </div>
    </div>
</section>

<?php get_footer();