<?php 
include '../controllers/paginationDetailedPokemonController.php'

?>

</div>

<div class="mb-pagination">

    <div class="flex space-between relative">
        <a href="detailed_pokemon.php?id=<?=$previous?>" class="pagination flex mrg-left">
            <p class="arrows"><</p>
            <p class="white">No.<?= $items[$previous]->getOrder()?></p>
            <p class="grey"><?= $items[$previous]->getName() ?></p>
        </a>
        <a href="detailed_pokemon.php?id=<?=$next?>" class="pagination flex mrg-right">
            <p class="grey"><?= $items[$next]->getName() ?></p>
            <p class="white">No.<?= $items[$next]->getOrder()?></p>
            <p class="arrows">></p>
        </a>
        <h2 class="pokemon-name flex center"><?=$pokemon->getName()?> No.<?=$pokemon->getOrder()?></h2>
    </div>


</div>
<div class="container">