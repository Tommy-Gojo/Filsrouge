<?php ob_start() ?>

    <p color="black">page de recherche pour les medecins et pharma </p>

<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";