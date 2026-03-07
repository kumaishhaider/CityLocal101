<footer class="footer">

    <div class="container">

        <div class="footer-logo">
            <img src="<?php echo $siteURL; ?>/assets/logos/citylocal101-logo.png" alt="CityLocal101 Logo">
        </div>

        <div class="footer-contact">
            <p>Email: <?php echo $contactEmail; ?></p>
            <p>Phone: <?php echo $phoneNumber; ?></p>
        </div>

        <div class="footer-links">
            <a href="<?php echo $siteURL; ?>">Home</a>
            <a href="<?php echo $siteURL; ?>/about.php">About</a>
            <a href="<?php echo $siteURL; ?>/services.php">Services</a>
            <a href="<?php echo $siteURL; ?>/contact.php">Contact</a>
            <a href="<?php echo $siteURL; ?>/privacy-policy.php">Privacy Policy</a>
            <a href="<?php echo $siteURL; ?>/terms-conditions.php">Terms & Conditions</a>
        </div>

        <div class="footer-copy">
            <p>© <?php echo date("Y"); ?> <?php echo $siteName; ?>. All rights reserved.</p>
        </div>

    </div>

</footer>

<?php include 'scripts.php'; ?>

</body>
</html>