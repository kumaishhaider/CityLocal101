<?php
include 'includes/config.php';

$pageTitle = "Our Services | CityLocal101";
$metaDescription = "Explore the services offered by CityLocal101 including website development, local SEO and lead generation for local businesses.";
$pageURL = $siteURL . "/services.php";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>


<section class="services-section">
    <div class="container">

        <h1>Our Services</h1>
        <p>We help local businesses grow with digital marketing and high converting websites.</p>

        <div class="service-box">
            <h2>Website Development</h2>
            <p>
            We design professional websites that are fast, mobile friendly and built to convert visitors into customers.
            </p>
        </div>

        <div class="service-box">
            <h2>Local SEO</h2>
            <p>
            Our SEO strategies help businesses rank higher in Google search results so they can attract more customers
            from their local area.
            </p>
        </div>

        <div class="service-box">
            <h2>Lead Generation</h2>
            <p>
            We build optimized landing pages and marketing funnels that help businesses generate consistent leads
            from online traffic.
            </p>
        </div>

    </div>
</section>


<?php include 'includes/footer.php'; ?>