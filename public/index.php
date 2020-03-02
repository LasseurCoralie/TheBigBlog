<?php

//appelle de l'autoload pour permettre de charger et de lier nos fichiers
require __DIR__ . '/../vendor/autoload.php';


// Récupération de la page à afficher

$pageToDisplay = '/';

if(isset($_GET['_url'])){
    $pageToDisplay = $_GET['_url'];
}


// Utilisation d'altorouter pour créer nos routes et permettre l'affichage de nos pages 

$router = new AltoRouter();

//setBasePath() sert à indiquer où se trouver la racine de mon site : nous c'est le répertoir public 
$router->setBasePath($_SERVER['BASE_URI']);

//on ajoute nos route en utilisant la méthode map()
$router->map(
    'GET', //méthode http utilisé pour récupérer les infos
    '/', //adresse de notre page
    [
        'action' => 'homeAction', //nom de la méthode utilisée
        'controller' => '\TheBigBlog\Controllers\MainController' //fichier utilisé pour appeler l'action
    ],
    'home' //nom de notre page choisie arbitrairement
);

$router->map(
    'GET', //méthode http utilisé pour récupérer les infos
    '/article', //adresse de notre page
    [
        'action' => 'allArticleAction', //nom de la méthode utilisée
        'controller' => '\TheBigBlog\Controllers\MainController' //fichier utilisé pour appeler l'action
    ],
    'article' //nom de notre page choisie arbitrairement
);


//on vérifie qu'il y a une route correspondant à la page demandée
$match = $router->match();

if ($match){
    $methodToCall = $match['target']['action'];
    $controllerToUse = $match['target']['controller'];
    $urlParams = $match['params'];

    $controller = new $controllerToUse();
    $controller->$methodToCall($urlParams);
} else {
    //affichage page 404
    header("HTTP/1.0 404 Not Found");
    echo 'Vous avez demandé une 404 ?';
    exit();
}