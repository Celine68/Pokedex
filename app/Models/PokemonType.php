<?php

namespace Pokedex\Models;

class PokemonType extends CoreModel
{
    private $pokemon_numero;
    private $type_id;

    /**
     * Get the value of pokemon_numero
     */ 
    public function getPokemon_numero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }
}