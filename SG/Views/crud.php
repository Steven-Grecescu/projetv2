<?php ob_start();

$content = ob_get_clean();
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Views/template.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Article.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Model.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\ArticleManager.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Controller/ArticleController.php";

require_once "template.php";
require_once "../index.php";
require_once "../Models/Article.class.php";
require_once "../Models/Model.class.php";
require_once "../Models/ArticleManager.php";
require_once "../Controller/ArticleController.php";

?>
<link rel="stylesheet" href="/public/style.css">

<main>
    <table>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Description</th>
            <th>Ref</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>

        <!-- J'ai ajouté ça -->
        <?php
        $articleManager = new ArticleManager();
        $articleManager->chargementArticle();
        $articles = $articleManager->getArticle();
        ?>

    <?php for($i=0;$i<count($articles);$i++) : ?>

        <tr>
            <td><img src="../public/images/<?= $articles[$i]->getImageArticle(); ?>.jpg" alt="IMG"></td>
            <td><a href="<?= URL ?>/articles/l/<?= $articles[$i]->getRefArticle();?>"><?= $articles[$i]->getNomArticle();?></a></td>
            <td><?= $articles[$i]->getTailleArticle(); ?></td>
            <td><?= $articles[$i]->getDescriptionArticle(); ?></td>
            <td><?= $articles[$i]->getRefArticle();?></td>
            <td>
                <form method="POST" action="<?= URL ?>/articles/s/<?=$articles[$i]->getRefArticle();?>"onSubmit="return confirm('Voulez vous vraiment supprimer le article ?');">
                <button type="submit">Supprimer</button>
                </form>
                <td><a href="<?= URL?>/articles/m/<?=$articles[$i]->getRefArticle();?>"><button>Modifier</button></a></td>
            </td>
        </tr>

        <?php endfor; ?>
    </table>
    <a href="<?= URL ?>/articles/a"><button>Ajouter</button></a>
</main>

</body>
</html>