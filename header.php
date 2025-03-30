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

<link rel="stylesheet" href="assets/css/style.css?v=1">

<script src="assets/js/nav.js"></script>

</head>

<body>


<header class="header">
<?php include('nav.php'); ?>
</header>