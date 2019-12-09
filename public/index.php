<?php

require __DIR__.'/controllers/MainControllers.php';

$pageToDisplay = '/home';

if (isset($_GET['_url'])){
    $pageToDisplay = $_GET['_url'];
}

$mainController = new MainController();

$pages = [
    '/home' => 'homeAction',
    '/article' => 'articlesAction',
    '/about' => 'aboutAction',
];

if (isset($pages[$pageToDisplay])){
    $methodToCall = $pages[$pageToDisplay];
    $mainController->$methodToCall();
} else {
    header("HTTP/1.0 404 Not Found");
    echo 'Vous avez demandé une 404 ? La voici :';
    echo '<img src="http://www.roadsmile.com/images/peugeot-404_key_6.jpg"/>';
    exit();
}