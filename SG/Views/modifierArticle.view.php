<?php ob_start() ?>


<form method='POST' action="<?= URL ?>livres/mv" enctype="multipart/form-data">
    <label for="titre">Titre :</label><br>
    <input type="text" id="titre" name="titre" value="<?=$articles->getNomArticle()?>"><br>
    <label for="NbPages">Nombre de pages :</label><br>
    <input type="number" id="nbPages" name="nbPages" value="<?=$articles->getDescriptionArticle()?>"><br><br>
    <label for="NbPages">Nombre de pages :</label><br>
    <input type="number" id="nbPages" name="nbPages" value="<?=$articles->getTailleArticle()?>"><br><br>
    <h3>Image :</h3>
    <img src="<?= URL ?>public/images/<?= $articles->getImageArticle();?>">
    <label for="image">Changer l'image :</label><br>
    <input type="file" id="image" name="image">
    <br><br>
    <input type="hidden" name="identifiant" value="<?=$articles->getRefArticle();?>">
    <input type="submit" value="Valider">
</form>

<?php 
$titre = "Modification de l'article :". $articles->getNomArticle();
$content = ob_get_clean();
require "./template.php"; 
require_once "../Models/Article.class.php";
?>