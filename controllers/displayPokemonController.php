<?php

include_once '../models/pokemonsRepository.php';
include 'session.php';
// $_SESSION['pokemon_repository'] = [];
// session_destroy();

$items = PokemonsRepository::getInstance()->getPokemons();

?>