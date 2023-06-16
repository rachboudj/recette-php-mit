<?php 
include './partials/_header.php';
?>


<h1>Ajouter un plat</h1>
<div>
    <form action="">
        <!-- Titre -->
        <div class="">
            <label for="">Titre du plat</label>
            <input type="text" name="title" id="title">
        </div>
        <!-- Content -->
        <div class="">
            <label for="">Description du plat</label>
            <textarea type="text" name="description"></textarea>
        </div>
        <!-- Image -->
        <div class="">
            <label for="">Photo</label>
            <input type="file" name="url_image">
        </div>
    </form>
</div>


<?php 
include './partials/_footer.php';
?>