<?php
include 'includes/config.php';

$pageTitle = "Home | CityLocal101";
$metaDescription = "CityLocal101 helps local businesses grow with websites, local SEO, Google Maps ranking and lead generation.";
$pageURL = $siteURL . "/index.php";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>

<section class="hero hero-home">
    <div class="container hero-grid">
        <div class="hero-text">
            <span class="small-badge">Digital Marketing Agency</span>
            <h1>Helping Local Businesses Grow With Smart Digital Marketing</h1>
            <p>
                CityLocal101 helps businesses get more calls, more leads and better online visibility with websites,
                local SEO, Google Maps ranking and conversion-focused marketing.
            </p>
            <div class="hero-buttons">
                <a href="contact.php" class="cta-button">Get Free Consultation</a>
                <a href="services.php" class="secondary-button">Explore Services</a>
            </div>
        </div>

        <div class="hero-image-card">
            <img src="assets/images/hero/hero-main.jpg" alt="Digital marketing for local businesses">
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <div class="stat-box">
            <h2>100+</h2>
            <p>Projects Supported</p>
        </div>

        <div class="stat-box">
            <h2>24/7</h2>
            <p>Client Support</p>
        </div>

        <div class="stat-box">
            <h2>Local</h2>
            <p>Business Focused</p>
        </div>

        <div class="stat-box">
            <h2>ROI</h2>
            <p>Growth Driven Strategy</p>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <div class="section-heading">
            <span class="small-badge">Our Solutions</span>
            <h2>Services That Help You Get Real Results</h2>
            <p>
                We build digital systems that help your business get found online and convert visitors into customers.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-box">
                <h3>Website Design & Development</h3>
                <p>Fast, clean and mobile friendly business websites built to generate leads.</p>
            </div>

            <div class="service-box">
                <h3>Local SEO</h3>
                <p>Better ranking in local search so more nearby customers can find your business.</p>
            </div>

            <div class="service-box">
                <h3>Google Maps Optimization</h3>
                <p>Improve your map visibility and increase local calls, visits and trust.</p>
            </div>

            <div class="service-box">
                <h3>Landing Page Marketing</h3>
                <p>High converting pages made for ads, offers and service-based campaigns.</p>
            </div>

            <div class="service-box">
                <h3>Social Media Marketing</h3>
                <p>Stay visible, build trust and connect with your audience on major platforms.</p>
            </div>

            <div class="service-box">
                <h3>Content Marketing</h3>
                <p>Useful content that supports SEO, authority and customer engagement.</p>
            </div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="container">
        <div class="section-heading">
            <span class="small-badge">How We Work</span>
            <h2>Simple Process. Better Growth.</h2>
        </div>

        <div class="process-grid">
            <div class="process-box">
                <h3>01. Discovery</h3>
                <p>We understand your business, goals, local area and current problems.</p>
            </div>

            <div class="process-box">
                <h3>02. Strategy</h3>
                <p>We plan the right website, SEO and marketing setup for your niche.</p>
            </div>

            <div class="process-box">
                <h3>03. Execution</h3>
                <p>We build, optimize and improve your digital presence for better results.</p>
            </div>

            <div class="process-box">
                <h3>04. Growth</h3>
                <p>We track performance and keep improving conversions and visibility.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Let’s Build Something That Brings You More Customers</h2>
        <p>
            Whether you need a better website, stronger local SEO or more qualified leads, CityLocal101 is ready to help.
        </p>
        <a href="contact.php" class="cta-button">Start Now</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>