<?php 

include_once('../controllers/displayPokemonController.php');

include '../controllers/session.php';

include('header.php');
?>

<div class="pokemons">

<?php
/** @var array $items */
foreach ($items as $poke){

    include 'pokemon_display.php';

?>
</div>
<?php
}
?>


</div>
  
    
<?php 
include('footer.php');
?>