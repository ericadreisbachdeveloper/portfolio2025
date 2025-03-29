<?php 
include ('../includes/config.php'); 
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
        die( header('location: ' . SITE . '/error/' ) );
    }

 include('../header.php'); ?>

<h1>Error </h1>

<?php echo( SITE ); ?>

<?php include('../footer.php'); ?>