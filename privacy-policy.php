<?php
include 'includes/config.php';

$pageTitle = "Privacy Policy | CityLocal101";
$metaDescription = "Read the privacy policy of CityLocal101.";
$pageURL = $siteURL . "/privacy-policy.php";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>

<section class="about-section">
    <div class="container">
        <h1>Privacy Policy</h1>

        <p>
            At CityLocal101, we value your privacy. This page explains how we collect, use and protect your information.
        </p>

        <p>
            When you contact us through our website, we may collect details like your name, email address, phone number and message.
            We use this information only to respond to your inquiry, provide our services and improve communication with you.
        </p>

        <p>
            We do not sell your personal information to third parties. Your data is handled carefully and only used for business communication,
            service delivery and website improvement.
        </p>

        <p>
            Our website may use cookies or simple analytics tools to understand visitor behavior and improve performance.
        </p>

        <p>
            If you have any questions about this policy, please contact us at <?php echo $contactEmail; ?>.
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>