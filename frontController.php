<?php

// index.php
// load and initialize any global libraries
 //1. se mettre en liens avec le modele
 require("model/model.php");

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ("/frontController.php" === $uri) {
    require "controller/listController.php";
} elseif ('/frontController.php/show' === $uri && isset($_GET['id'])) {
    require "controller/showController.php";
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}