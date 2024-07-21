<?php

require 'functions.php';

$url = $_SERVER['REQUEST_URI'];

if ($url == '/php/section-2/') {
    require 'controllers/index.php';
}
if ($url == '/php/section-2/about.php') {
    require 'controllers/about.php';
}
if ($url == '/php/section-2/contact.php') {
    require 'controllers/contact.php';
}
