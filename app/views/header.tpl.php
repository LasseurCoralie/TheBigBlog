<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet"> 
    <title>The Big Blog</title>
</head>

<body>
    <header>
        <div class="container">
        <div class="header-title-zn">
            <h1 class="header-main-title header-main-title-sm header-main-title-md">The Big Blog</h1>
        </div>
        
        <div class="header-nav-zn">
            <nav class="navbar navbar-expand-md nav-bar-layout">
                <div class="btn-zn">
                    <button class="navbar-toggler header-btn-layout" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto header-list-layout">
                            <li class="nav-item header-btn-text-layout">
                                <a class="nav-link header-btn-text-layout" href="<?= $router->generate('home') ?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item header-btn-text-layout">
                                <a class="nav-link header-btn-text-layout" href="<?= $router->generate('article') ?>">Articles</a>
                            </li>
                            <li class="nav-item header-btn-text-layout">
                                <a class="nav-link header-btn-text-layout" href="#">Authors</a>
                            </li>
                            <li class="nav-item header-btn-text-layout">
                                <a class="nav-link header-btn-text-layout" href="#">Categories</a>
                            </li>
                            <li class="nav-item header-btn-text-layout ">
                                <a class="nav-link header-btn-text-layout " href="#">Log in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </header>
        
    <main>