<?php

if ($_SERVER['SERVER_NAME'] === 'localhost') {
    define('SITE', 'http://localhost/paddle');
} else {
    define('SITE', 'https://' . $_SERVER['HTTP_HOST']);
}
