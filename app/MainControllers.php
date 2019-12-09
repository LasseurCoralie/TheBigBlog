<?php

class MainController{

    function homeAction(){
        $viewVars = [
            'title' => 'Home'
        ];
        $this->show('home', $viewVars);
    }

    function articlesAction(){
        $viewVars = [
            'title' => 'Article'
        ];
        $this->show('article', $viewVars);
    }

    function aboutAction(){
        $viewVars = [
            'title' => 'About'
        ];
        $this->show('about', $viewVars);
    }

    private function show($viewName, $viewVars=[]){
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/'. $viewName .'.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}

