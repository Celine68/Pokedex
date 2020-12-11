<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;

class TypeController extends CoreController
{
    public function types($params) {
        $type = new Type();
        $this->show('types-list', [
            'types' => $type->findAll(),
        ]);
    }

    public function type($params) {
        $pokemon = new Pokemon();
        $type = new Type();
        $typeName = $type->find($params['id'])->getName();

        $this->show('index', [
            'pokemons' => $pokemon->findAllFromType($params['id']),
            'title' => "Pokémons de type " . $typeName,
        ]);
    }
}