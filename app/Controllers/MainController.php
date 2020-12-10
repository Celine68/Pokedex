<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    public function home($params) {

        $pokemon = new Pokemon();

        $this->show('index', [
            'pokemons' => $pokemon->findAll(),
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}