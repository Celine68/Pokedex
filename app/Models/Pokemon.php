<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;

class Pokemon extends CoreModel
{
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    public function findAll()
    {
        $sql = '
            SELECT id, nom, numero
            FROM pokemon
            ';
        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Pokemon::class));
    }

    public function find($id)
    {
        $sql = '
            SELECT *
            FROM pokemon
            WHERE pokemon.id = ' . $id
            ;
        return (Database::getPDO()->query($sql)->fetchObject(Pokemon::class));
    }

    public function findAllFromType($id)
    {
        $sql = '
            SELECT
                pokemon.id as id,
                pokemon.nom as nom,
                pokemon.numero as numero
            FROM type
            JOIN pokemon_type ON pokemon_type.type_id = type.id
            JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
            WHERE type.id = ' . $id
            ;

        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Pokemon::class));
    }
        
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getTypes($id)
    {
        $sql = '
            SELECT
                type.*
            FROM type
            JOIN pokemon_type ON pokemon_type.type_id = type.id
            JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
            WHERE pokemon.id = ' . $id
            ;
        return (Database::getPDO()->query($sql)->fetchAll(\PDO::FETCH_CLASS, Type::class));
    }

    public function getPercentStat($statNumber) {
        return ($statNumber * 100) / 255;
    }
    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

}