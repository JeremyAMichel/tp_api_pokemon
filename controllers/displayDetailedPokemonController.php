<?php 

include_once('../models/pokemonsRepository.php');
include_once('../controllers/displayPokemonController.php');

include '../controllers/session.php';

$pokemon = null;
if (isset($_GET['id'])){
    $pokemon = PokemonsRepository::getInstance()->getPokemonById($_GET['id']);
}

?>