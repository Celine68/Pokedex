<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    public function home($params) {

        $pokemon = new Pokemon();

        $this->show('index', [
            'pokemons' => $pokemon->findAll(),
            'title' => "Liste des pokémons",
        ]);
    }
    
    public function error404() {
        echo ('404');
    }
}