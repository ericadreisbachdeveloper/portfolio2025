<?php
include('../config/config.php');

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    header('Location: ' . SITE . '/error/');
}
?>

<!DOCYTPE html>
<html lang="en-US">
<meta charet="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
    
<head>

<title>Top Full Stack Chicago Web Developer - erica drisbach </title>

<link rel="stylesheet" href="<?php echo(SITE); ?>/assets/css/style.css?v=1">

<script src="<?php echo(SITE); ?>/assets/js/nav.js"></script>

</head>


<body>


<div class="wrapper">


<header class="header">
    <div class="header-container">
    <?php include('nav.php'); ?>
    </div>
</header>


<main id="main">