<?php ob_start();

$content = ob_get_clean();
// require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Views/template.php";
// require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/Article.class.php";
// require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/Model.class.php";
// require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/ArticleManager.php";
require_once "template.php";
require_once "Models/Article.class.php";
require_once "Models/Model.class.php";
require_once "Models/ArticleManager.php";
?>

<form method='POST' action="<?= URL ?>crud/av" enctype="multipart/form-data">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" value=""><br>
    <label for="description">Description :</label><br>
    <input type="text" id="description" name="description" value=""><br><br>
    <label for="taille">Taille :</label><br>
    <input type="number" id="taille" name="taille" value=""><br><br>
    <label for="ref">Reference :</label><br>
    <input type="text" id="ref" name="ref" value=""><br><br>
    <label for="image">Image </label><br>
    <input type="file" id="image" name="image" value="">
    <br><br>
    <input type="submit" value="Valider">
    
</form>