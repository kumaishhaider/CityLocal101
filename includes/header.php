<?php
include 'config.php';

if (!isset($pageTitle)) {
    $pageTitle = $defaultTitle;
}

if (!isset($metaDescription)) {
    $metaDescription = $defaultDescription;
}

if (!isset($pageURL)) {
    $pageURL = $siteURL;
}

if (!isset($ogImage)) {
    $ogImage = $siteURL . "/assets/logos/citylocal101-logo.png";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $pageURL; ?>">

    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $pageURL; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">

    <link rel="icon" type="image/png" href="assets/logos/favicon.png">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>