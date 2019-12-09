<?php

namespace TheBigBlog\Controllers;

use TheBigBlog\Models\Article;

class MainController extends CoreController {
    
    //méthode pour afficher la page home
    public function homeAction(){
        
        $articlesModel = new Article();
        $articles = $articlesModel->findAll();


        //viewVars représente les données transmise à la view
        $viewVars = [
            'title' => 'Accueil - TheBigBlog',
            'articles' => $articles
        ];

        //délègue l'affichage à la méthode show
        $this->show('home', $viewVars);
    }

    //méthode pour afficher la page allarticles
    public function allArticleAction(){
        $viewVars = [
            'title' => 'Tous les articles - TheBigBlog'
        ];

        $this->show('allarticles', $viewVars);
    }
}