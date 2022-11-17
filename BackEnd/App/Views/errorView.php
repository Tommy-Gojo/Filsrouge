<?php ob_start() ?>

<article id="accueil-error">
    <h2 id="h2-error">Oops</h2>
    <p class="text-error">Il semblerai que une error vient de se produire</p>
    <p class="text-error">error 404</p>
    <p class="text-error">Voici un boutton qui soignera ce probleme</p>
    <input type="button" value="Page d'accueil" onclick="location.href='accueil'" id="btn-acc">
</article>

<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";
