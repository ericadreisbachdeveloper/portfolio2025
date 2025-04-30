<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    header('Location: ' . SITE . '/error/');
}


/*
 * session_start() creates a session or resumes the current one based on a session identifier passed
 * via a GET or POST request, or passed via a cookie.
 *
 * ref: https://www.php.net/manual/en/function.session-start.php
 */
session_start();

if (!isset($_SESSION['config'])) {
    include('../config/config.php');
}

session_write_close();
?>

<!DOCYTPE html>
<html lang="en-US">
<meta charet="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
    
<head>

<title>Top Full Stack Chicago Web Developer - erica dreisbach </title>

<link rel="stylesheet" href="<?php echo(SITE); ?>/assets/css/style.css?v=2">

<script src="<?php echo(SITE); ?>/assets/js/nav.js"></script>

<?php /* AOS initialized before closing </body> */ ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>



<body>


<div class="wrapper">


<header class="header">
    <div class="header-container">
    <?php include('nav.php'); ?>
    </div>
</header>


<main id="main">