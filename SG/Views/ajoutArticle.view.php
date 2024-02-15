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
    <label for="prix">Prix :</label><br>
    <input type="number" id="prix" name="prix" value=""><br><br>
<select id="genre" name="genre">
    <option value="">Choisir un genre</option>
    <option value="femme">Femme</option>
    <option value="homme">Homme</option>
    <option value="fille">Fille</option>
    <option value="garçon">Garçon</option>
</select> <br><br>
<select id="type" name="type">
    <option value="">Choisir un type de vetement</option>
    <option value="jean">jean</option>
    <option value="polo">polo</option>
    <option value="pantalon">pantalon</option>
    <option value="shirt">shirt</option>
    <option value="tshirt">tshirt</option>
    <option value="robe">robe</option>
    <option value="vest">veste</option>


</select> <br> <br>
    <label for="ref">Reference :</label><br>
    <input type="text" id="ref" name="ref" value=""><br><br>
    <label for="image">Image </label><br>
    <input type="file" id="image" name="image" value="">
    <br><br>
    <input type="submit" value="Valider">
    
</form>