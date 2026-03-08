<nav class="navbar">
    <div class="container nav-wrapper">
        <div class="logo">
            <a href="<?php echo $siteURL; ?>/index.php">
                <img src="<?php echo $siteURL; ?>/assets/logos/citylocal101-logo.png" alt="CityLocal101 Logo">
            </a>
        </div>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
            ☰
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="<?php echo $siteURL; ?>/index.php">Home</a></li>
            <li><a href="<?php echo $siteURL; ?>/about.php">About</a></li>
            <li><a href="<?php echo $siteURL; ?>/services.php">Services</a></li>
            <li><a href="<?php echo $siteURL; ?>/contact.php">Contact</a></li>
        </ul>

        <div class="nav-phone">
            <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumber; ?></a>
        </div>
    </div>
</nav>