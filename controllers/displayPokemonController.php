<?php

include_once '../models/pokemonsRepository.php';

$items = (new PokemonsRepository())->getPokemons();

?>