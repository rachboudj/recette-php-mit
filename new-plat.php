<?php
include './partials/_header.php';

$error = [];
$errorMsg = "Ce champ est obligatoire";
$sucess = false;

// 1- Je vérifie que le btn submit fonctionne
if (!empty($_POST['submited'])) {
    // 2- Je stock les datas du user dans des variables
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    // 3- Validation des inputs
    if (!empty($title)) {
        // Je vérifie le nbr de caractere que le user a entrer
        // Si les caractères sont < 4 => message error
        if (strlen($title) < 4) {
            $error['title'] = "Veuillez rentrer 4 caractères minimum";
        } elseif (strlen($title) > 25) {
            $error['title'] = "Veuillez rentrer 25 caractères maximum";
        }
    } else {
        $error['title'] = $errorMsg;
    }

    if (!empty($description)){
        if(strlen($description) < 4) {
            $error['description'] = "Veuillez rentrer 4 caractères minimum";
        } elseif(strlen($description) > 150) {
            $error['description'] = "Veuillez rentrer maximum 150 caractères";
        }
    } else {
        $error['description'] = $errorMsg;
    }

    // Validation de la catégorie

    if(count($error) == 0) {
        $sucess = true;
        // Insertion en BDD
        
    }

}
?>


<h1>Ajouter un plat</h1>
<?php if($sucess == false) { ?>
<div class="container_form">
    <form method="POST">
        <!-- Titre -->
        <div class="container_input block input">
            <label for="">Titre du plat</label>
            <input type="text" name="title" id="title" value="<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>">
            <p class="text-error">
                <?php
                if (isset($error['title'])) {
                    echo $error['title'];
                }  ?>
            </p>
        </div>
        <!-- Content -->
        <div class="container_input block">
            <label for="">Description du plat</label>
            <textarea type="text" name="description"><?php if(isset($_POST['description'])){echo $_POST['description'];} ?></textarea>
            <p class="text-error"><?php if (isset($error['description'])) {
                                        echo $error['description'];
                                    }  ?></p>
        </div>
        <!-- Photo -->
        <div class="block">
            <label for="">Photo</label>
            <input type="file" name="url_image">
        </div>
        <!-- Catégorie -->
        <div class="container_input block">
            <label for="">Catégorie</label>
            <select name="category" id="" value="<?php if(isset($_POST['category'])){echo $_POST['category'];} ?>">
                <option value="">Choisir la catégorie</option>
                <option value="Sucré">Sucré</option>
                <option value="Salé">Salé</option>
            </select>
            <p class="text-error"><?php if (isset($error['category'])) {
                                        echo $error['category'];
                                    }  ?></p>
        </div>
        <!-- Soumettre le formulaire -->
        <!-- <button class="btn" type="submit">Envoyer</button> -->
        <input class="btn" type="submit" value="Envoyer" name="submited">
    </form>
</div>


<?php
} else {
    echo "<p>Votre recette a bien été enregistré !</p>";
}

include './partials/_footer.php';
?>