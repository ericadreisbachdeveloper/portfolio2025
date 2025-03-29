<?php 

/* Define SITE */ 
if( $_SERVER['HTTP_HOST'] == 'localhost') {
    $site = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/paddle';
}
else {
    $site = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
}
define('SITE', $site); 

/* 
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die( header('location: ' . SITE . '/error/' ) );
}
    */

?>

