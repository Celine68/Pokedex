<?php

namespace Pokedex\Controllers;

class CoreController
{
    public function show($templateName, $viewVars= []) {

        global $router;
        
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewVars);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $templateName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';

    }
}