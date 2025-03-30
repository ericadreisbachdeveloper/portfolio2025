<?php 

/* Define SITE */ 
if( $_SERVER['HTTP_HOST'] == 'localhost') {
    $site = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/paddle';
}
else {
    $site = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
}
define('SITE', $site); 

?>

