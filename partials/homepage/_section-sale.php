<?php 
    include './utils/data_sale.php';
?>

<section id="recette-salee" class="container">
    <h2>Nos recettes salées</h2>
    <div class="container-card">
    <?php foreach ($platSales as $plat) {
                include './partials/homepage/_card.php';
            } ?>
    </div>
</section>