<?php
/** @var Pokemon $poke */
?>

<div class="pokemon">
    <a href="detailed_pokemon.php?id=<?= $poke->getId() ?>" class="card">
    <img class="logo" src="<?php echo $poke->getLogo() ?>" height="100px" width="100px">
    <div class="content">
        <h3 class="lil-order">No.<?php echo $poke->getOrder() ?></h3>
        <h2 class="pokeFont"><?php echo $poke->getName() ?></h2>
        <div class="types">
            <img src="<?php echo $poke->getTypes()[0]->getLink() ?>" alt="<?php echo $poke->getTypes()[0]->getName() ?>.png" height="auto" width="40px">
            <?php 
            if(count($poke->getTypes())==2){
            ?>
                <img src="<?php echo $poke->getTypes()[1]->getLink() ?>" alt="<?php echo $poke->getTypes()[1]->getName() ?>.png" height="auto" width="40px">

            <?php 
            }  
            ?>
            <!-- 
            // foreach($poke->getTypes() as $type){
            //     echo '<h4>'.$type.'</h4>';
            // }
            // echo '<h4 class="'.$poke->getTypes()[0].' type">'.$poke->getTypes()[0].'</h4>';
            // if(count($poke->getTypes())==2){
            //     echo '<h4 class="'.$poke->getTypes()[1].' type">'.$poke->getTypes()[1].'</h4>';
            // }
            
             -->
        </div>
    </div>
    </a>