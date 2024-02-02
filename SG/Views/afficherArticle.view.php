<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    <img src="<?= URL ?>../../../public/images/<?= $art->getImageArticle();?>" alt="">
    <p>Nom : <?= $articles->getNomArticle(); ?></p>
    <p>Desc : <?= $art->getDescriptionArticle(); ?></p>
</div>


<?php 
$titre = $art->getTitre();
$content = ob_get_clean();
require "template.php"; 
?>