<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri){
    case "/":
        include 'home.php';
    break;

    case "/bebidas":
        include 'bebidas.php';
    break;

    default:
        echo 'erro 404';
    break;
}