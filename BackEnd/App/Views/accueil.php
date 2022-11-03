<?php ob_start() ?>

<article class="imageBg img-bg" id="img-bg">
    <div class="container">
        <h1 class="title-acc">Vous êtes malade, pas disponible
            ou au travail?</h1>
        <h2 class="title-acc title-acc2">Pas de soucis !
            <br> on s'occupe de tout !
        </h2>
    </div>
    <div class="container container1">
        <form action="" id="form">
            <input type="search" class="search-city search" placeholder="Saissisez votre ville ...">
            <input type="button" class="search-btn search" value="Rechercher">
        </form>
    </div>
</article>



<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";
