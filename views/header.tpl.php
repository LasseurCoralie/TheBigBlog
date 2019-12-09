<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet"> 
    <title><?= $viewVars['title']; ?> - The Big Blog</title>
</head>

<body>
    <header>
        <h1 id="main-title">The Big Blog</h1>
        <nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
                <ul class="navbar-nav mt-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link" href="./home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./article">Articles</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./about">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>