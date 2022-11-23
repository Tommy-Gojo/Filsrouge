<?php ob_start() ?>
<article id="accueil-connexion">
    <form method="POST" action="" enctype="multipart/form-data">

        <label for="pseudo">Votre pseudo</label>
        <input type="text" placeholder="Votre Nom" name="pseudo">
        <label for="email">Votre Email</label>
        <input type="text" placeholder="Votremail@exemple.com" id="email" name="email">

        <label for="password">Votre Mot de passe</label>
        <input type="text" placeholder="Votre mot de passe" id="password" name="password">

        <button type="submit"></button>
    </form>
</article>
<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";