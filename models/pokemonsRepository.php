<?php

include_once 'pokemon.php';
include_once 'type.php';



/**
 * Class ItemsRepository : c'est lui qui normalement fait le lien avec la database
 */
class PokemonsRepository
{
    
    /** @var Pokemon[] $items */
    private array $items;

    private static ?PokemonsRepository $instance = null;

    public static function getInstance(): PokemonsRepository {
        if (!isset(PokemonsRepository::$instance) && !isset($_SESSION['pokemon_repository'])) {
            PokemonsRepository::$instance = new PokemonsRepository();
            $_SESSION['pokemon_repository'] = self::getInstance();
        } else if (isset($_SESSION['pokemon_repository'])) {
            PokemonsRepository::$instance = $_SESSION['pokemon_repository'];
        }
        return PokemonsRepository::$instance;
    }

    private function __construct()
    {
        $this->findPokemonsFromApi();
    }

    /**
     * Get the value of items
     */ 
    public function getPokemons(): array {
        return self::$instance->items;
    }

    public function findPokemonsFromApi():void{
        $file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=20';
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);
        $officialArtwork = 'official-artwork';
        $i = 0;
        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data);
            
            $types[] = new Type($jsonPokemon->types[0]->type->name,
            '../img/type-'.$jsonPokemon->types[0]->type->name.'.png');
            if(count($jsonPokemon->types) == 2) {
                $types[] = new Type($jsonPokemon->types[1]->type->name,
                '../img/type-'.$jsonPokemon->types[1]->type->name.'.png');
            }
            $this->items[$i] = new Pokemon(
                $jsonPokemon->name,
                $jsonPokemon->sprites->front_default,
                $jsonPokemon->sprites->other->$officialArtwork->front_default,
                $jsonPokemon->order,
                $types,
                $i
            );
            $i++;
            $types=[];
        }            
    }

    public function getPokemonById(int $id) {
        return $this->getPokemons()[$id];
    }
}