<?php ob_start() ?>
<article id="accueil-connexion"></article>
    <form action="">
        <label for="name">Votre nom</label>
        <input type="text" value="name" id="name">

        <label for="email">Votre Email</label>
        <input type="text" value="email" id="email">

        <label for="mdp">Votre Mot de passe</label>
        <input type="text" value="Mot de passe" id="mdp">

        <label for="confimMdp">Confirmer votre Mot de passe</label>
        <input type="text" value="Mot de passe" id="confimMdp">
    </form>
<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";