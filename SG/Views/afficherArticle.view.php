<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    <h2> <?= $articles->getNomArticle() ?> </h2>
    <img id="imgafficher" src="<?= URL ?>../../../public/images/<?= $articles->getImageArticle();?>" alt="img">
    <p>Desccription : <?= $articles->getDescriptionArticle(); ?></p>
    <p>Taille : <?= $articles->getTailleArticle();?></p>
    <p>Prix : <?= $articles->getPrixArticle();?> €  </p>
    <p>Ref : <?= $articles->getRefArticle();?></p>
    <p>ID : <?= $articles->getIdArticle();?></p>
    <button >Ajouter au panier</button>
</div>


<?php 
$content = ob_get_clean();
require "template.php"; 
?>