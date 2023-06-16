<?php
include './partials/_header.php';
include './utils/data_sale.php';
include './utils/data_sucre.php';
?>

<h1>Votre recette a bien été ajouté.</h1>

<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];

?>

<?php

if(empty($title) || empty($description) || empty($category)) {
    echo "<p class=''text-error>Il faut remplir tous les champs</p>";
} else { ?>

<h2>Voici les infos du plat à ajouter :</h2>

<ul>
    <li>Nom de la recette : <?= htmlspecialchars($title) ?></li>
    <li>Catégorie de la recette : <?= htmlspecialchars($category) ?></li>
    <li>Description de la recette : <?= htmlspecialchars($description) ?></li>
</ul>

<button class="btn"><a href="new-plat.php">Revenir sur la page d'accueil</a></button>

<?php } 

include './partials/_footer.php';
?>