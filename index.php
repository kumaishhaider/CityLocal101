<?php
include 'includes/config.php';

$pageTitle = "Home | CityLocal101";
$metaDescription = "CityLocal101 helps local businesses grow with websites, SEO and lead generation.";
$pageURL = $siteURL . "/";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>


<section class="hero">
    <div class="container">
        <h1>Grow Your Local Business With CityLocal101</h1>
        <p>We help local businesses generate more leads with high converting websites, SEO and local marketing strategies.</p>
        <a href="contact.php" class="cta-button">Get Started</a>
    </div>
</section>


<section class="services-preview">
    <div class="container">

        <h2>Our Services</h2>

        <div class="service-box">
            <h3>Website Development</h3>
            <p>High converting websites designed to generate leads for your business.</p>
        </div>

        <div class="service-box">
            <h3>Local SEO</h3>
            <p>Rank higher in Google search and attract more customers in your area.</p>
        </div>

        <div class="service-box">
            <h3>Lead Generation</h3>
            <p>We help businesses get consistent leads through optimized landing pages.</p>
        </div>

    </div>
</section>


<?php include 'includes/footer.php'; ?>