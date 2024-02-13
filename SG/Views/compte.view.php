<?php ob_start();

$content = ob_get_clean();
?>

<html>
<body>
<main>

<p><?= $_SESSION['nom']  ?></p>
<p><?= $_SESSION['prenom'] ?></p>
<p><?= $_SESSION['email'] ?></p>
<p><?= $_SESSION['adresse'] ?></p>
<p><?= $_SESSION['tel'] ?></p>



</main>
</body>
</html>