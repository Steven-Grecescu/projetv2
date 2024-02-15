<?php ob_start();

$content = ob_get_clean();
require_once "Views/template.php";
require_once "Models/Article.class.php";
require_once "Models/ArticleManager.php";

?>
  <link rel="stylesheet" href="../Genres/Fille/style.css">
    <main>
        <h2>Filles</h2>
        <div>        
        <?php for($i=0;$i<count($articles);$i++) : ?>
            <?php if($articles[$i]->getGenreArticle() === "fille") : ?>

<article>
<a href="<?= URL ?>crud/l/<?= $articles[$i]->getIdArticle();?>"><img src="../public/images/<?= $articles[$i]->getImageArticle(); ?>" alt="IMG"></a>
    <h3><?= $articles[$i]->getNomArticle();?></h3>

</article>
            <?php endif;?>


<?php endfor; ?>
</div>
    </main>

</body>
</html>