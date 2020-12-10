<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class PokemonController extends CoreController
{
    public function pokemon($params) {
        $pokemon = new Pokemon();
        $pokemonDetails = $pokemon->find($params['id']);
        $pokemonTypes = $pokemon->getTypes($params['id']);
        $this->show('pokemon', [
            'pokemon' => $pokemonDetails,
            'types' => $pokemonTypes,
        ]);
    }
}