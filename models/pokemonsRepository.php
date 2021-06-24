<?php

include_once 'pokemon.php';



/**
 * Class ItemsRepository : c'est lui qui normalement fait le lien avec la database
 */
class PokemonsRepository
{
    
    private array $items;

    

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    public function getPokemons():array{
        $file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30';
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);
        $officialArtwork = 'official-artwork';
        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data);
            $types=[];
            $types[] = $jsonPokemon->types[0]->type->name;
            if(count($jsonPokemon->types) == 2) {
                $types[] = $jsonPokemon->types[1]->type->name;
            }
            $this->items[] = new Pokemon(
                $jsonPokemon->name,
                $jsonPokemon->sprites->front_default,
                $jsonPokemon->sprites->other->$officialArtwork->front_default,
                $jsonPokemon->order,
                $types
            );
            
        } 
        return $this->items;     
    }
}