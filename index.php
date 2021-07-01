<?php
require 'lib/template.php';

get_header();
// print_r($_GET ['page']);
$page = empty($_GET["page"]) ? "home": $_GET["page"];
$path = "pages/{$page}.php";
if (file_exists($path)) {
    require $path;
} else {
    require 'pages/404.php';
}

get_footer();
