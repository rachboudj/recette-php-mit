<?php
include './utils/data_sucre.php';
?>

<section id="recette-sucre" class="container">
    <h2>Nos plats sucrées</h2>

    <div class="container-card">
        <?php foreach ($platSucres as $plat) {
            include './partials/homepage/_card.php';
        } ?>
    </div>
</section>