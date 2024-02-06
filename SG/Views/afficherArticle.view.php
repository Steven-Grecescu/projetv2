<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    <h2> <?= $articles->getNomArticle() ?> </h2>
    <img src="<?= URL ?>../../../public/images/<?= $articles->getImageArticle();?>" alt="img">
    <p>Desccription : <?= $articles->getDescriptionArticle(); ?></p>
    <p>Taille : <?= $articles->getTailleArticle();?></p>
    <p>Ref : <?= $articles->getRefArticle();?></p>
    <a href="<?= URL?>crud/l/<?= $articles->getRefArticle();?>">Lien</a>
</div>


<?php 
$content = ob_get_clean();
require "template.php"; 
?>