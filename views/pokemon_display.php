<?php
/** @var Pokemon $poke */
// $typeClass=[
//     'grass' => 'grass',
//     'poison' => 'poison',
//     'fire' => 'fire',
//     'flying' => 'flying',
//     'water' => 'water',
//     'bug' => 'bug',
//     'normal' => 'normal',
//     'electric' => 'electric',
//     'ground' => 'ground',
//     'poison' => 'poison',
//     'poison' => 'poison',
//     'poison' => 'poison',
// ]
?>

<div class="pokemon">
    <img class="logo" src="<?php echo $poke->getLogo() ?>" height="100px" width="100px">
    <div class="content">
        <h3>No.<?php echo $poke->getOrder() ?></h3>
        <h2><?php echo $poke->getName() ?></h2>
        <div class="types">
            <?php 
            // foreach($poke->getTypes() as $type){
            //     echo '<h4>'.$type.'</h4>';
            // }
            echo '<h4 class="'.$poke->getTypes()[0].' type">'.$poke->getTypes()[0].'</h4>';
            if(count($poke->getTypes())==2){
                echo '<h4 class="'.$poke->getTypes()[1].' type">'.$poke->getTypes()[1].'</h4>';
            }
            
            ?>
        </div>
    </div>