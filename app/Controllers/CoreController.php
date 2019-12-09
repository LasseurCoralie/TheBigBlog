<?php

namespace TheBigBlog\Controllers;

use TheBigBlog\Models\Article;

class CoreController {
    protected function show($viewName, $viewVars=[]){
        global $router;

        $absoluteUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';

        extract($viewVars);

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}