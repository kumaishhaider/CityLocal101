<?php
include 'includes/config.php';

$pageTitle = "Thank You | CityLocal101";
$metaDescription = "Thank you for contacting CityLocal101.";
$pageURL = $siteURL . "/thank-you.php";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>

<section class="hero">
    <div class="container">
        <h1>Thank You</h1>
        <p>Your message has been sent successfully. We will get back to you soon.</p>
        <a href="index.php" class="cta-button">Back to Home</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>