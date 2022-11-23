<?php ob_start() ?>


<article id="accueil-connexion">
    <form method="POST" action="<?=URL?>ValiderInscription">
        <label for="pseudo">Votre nom ou pseudo qui sera utilisé</label>
        <input type="text" placeholder="Tom" id="name" name="pseudo">

        <label for="email">Votre Email</label>
        <input type="text" placeholder="Votremail@exemple.com" id="email" name="email">

        <label for="password">Votre Mot de passe</label>
        <input type="text" placeholder="Votre mot de passe" id="password" name="password">

        <label for="confimMdp">Confirmer votre Mot de passe</label>
        <input type="text" placeholder="Entrer une seconde fois le mot de passe" id="confimMdp" name="password">

        <button type="submit"></button>
    </form>
</article>
<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";