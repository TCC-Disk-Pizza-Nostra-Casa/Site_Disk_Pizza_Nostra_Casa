<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri){
    case "/":
        include 'home.html';
    break;

    case "/testeJulyo":
        include 'menu.php';
    break;

    case "/bebidas":
        include 'bebidas.php';
    break;

    default:
        echo 'erro 404';
    break;
}