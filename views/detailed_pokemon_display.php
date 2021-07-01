<div class="pokemon-detailed flex">

    <div class="detailed-information">
        <div class="flex">
            <div>
                <h3 class="detailed-stat-title">Taille :</h3>
                <p><?php echo $pokemon->getHeight() ?></p>
            </div>
            <!-- mettre dans cette div le poids d'un pokemon -->
            <div></div>
        </div>

    </div>
    <div class="detailed-img">
        <div class="relative anim">
            <img src="<?php echo $pokemon->getImgOff() ?>" alt="<?php echo $pokemon->getName() ?>" width="100%" class="img-flot">
        </div>
        <h3 class="detailed-stat-title">Type</h3>
        <div class="types">
            <img src="<?php echo $pokemon->getTypes()[0]->getLink() ?>" alt="<?php echo $pokemon->getTypes()[0]->getName() ?>.png" width="219px">
            <?php 
            if(count($pokemon->getTypes())==2){
            ?>
                <img src="<?php echo $pokemon->getTypes()[1]->getLink() ?>" alt="<?php echo $pokemon->getTypes()[1]->getName() ?>.png" width="219px">

            <?php 
            }  
            ?>
        </div>
    </div>
</div>

<div class="pokemon-detailed flex">
    <div class="stats">
        <h3 class="stat-title">Stats de base</h3>
        <div class="gauges flex">
        <?php foreach($pokemon->getStats() as $stat){?>
            <div class="gauge">
                <div class="total-gauge">
                    <div class="<?php echo $stat->getCssClass() ?>" style="height: <?php echo $stat->getPercent() ?>%"></div>
                    <div class="div-grid" style="top: 17.5px"></div>
                    <div class="div-grid" style="top: 37.5px"></div>
                    <div class="div-grid" style="top: 57.5px"></div>
                    <div class="div-grid" style="top: 77.5px"></div>
                    <div class="div-grid" style="top: 97.5px"></div>
                    <div class="div-grid" style="top: 117.5px"></div>
                    <div class="div-grid" style="top: 137.5px"></div>
                    <div class="div-grid" style="top: 157.5px"></div>
                    <div class="div-grid" style="top: 177.5px"></div>
                </div>
                <p class="stat-name"><?php echo $stat->getName()?></p>
            </div>
        <?php } ?>
        </div>
    </div>

    <div class="weakness">
            <h3 class="detailed-stat-title">Faiblesse(s)</h3>          
    </div>


</div>