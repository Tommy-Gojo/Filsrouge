<?php ob_start() ?>

<p>testttt</p>

<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";