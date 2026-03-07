<?php
include 'includes/config.php';

$pageTitle = "Contact Us | CityLocal101";
$metaDescription = "Contact CityLocal101 to grow your local business with websites, SEO and lead generation services.";
$pageURL = $siteURL . "/contact.php";

include 'includes/header.php';
?>

<?php include 'includes/navbar.php'; ?>


<section class="contact-section">
    <div class="container">

        <h1>Contact Us</h1>
        <p>If you want to grow your business online, get in touch with us.</p>

        <form action="forms/contact-form.php" method="POST">

            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Your Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Your Message</label>
                <textarea name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="cta-button">Send Message</button>

        </form>

    </div>
</section>


<?php include 'includes/footer.php'; ?>