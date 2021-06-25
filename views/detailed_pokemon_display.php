<?php
if($_GET['id']==0){
    $previous= array_key_last($items);
}else{
    $previous=$_GET['id']-1;
}

if($_GET['id']==array_key_last($items)){
    $next=0;
}else{
    $next = $_GET['id']+1;
}


// $next =

?>

</div>

<div class="detailed-pokemon">

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
        <div class="pokemon-name flex center"><?=$pokemon->getName()?> No.<?=$pokemon->getOrder()?></div>
    </div>


</div>
<div class="container">