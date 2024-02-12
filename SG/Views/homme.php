<?php ob_start();

$content = ob_get_clean();
require_once "Views/template.php";
require_once "Models/Article.class.php";
require_once "Models/ArticleManager.php";


?>
    <link rel="stylesheet" href="../Genres/Homme/style.css">
    <main>
        <h2>Hommes</h2>
        <?php for($i=0;$i<count($articles);$i++) : ?>

<div>
    <img src="../public/images/<?= $articles[$i]->getImageArticle(); ?>.jpg" alt="IMG">
    <a href="<?= URL ?>crud/l/<?= $articles[$i]->getIdArticle();?>"><?= $articles[$i]->getNomArticle();?></a>
    <?= $articles[$i]->getTailleArticle(); ?>
    <?= $articles[$i]->getDescriptionArticle(); ?>
    <?= $articles[$i]->getRefArticle();?>
</div>


<?php endfor; ?>
    </main>
</body>
</html>