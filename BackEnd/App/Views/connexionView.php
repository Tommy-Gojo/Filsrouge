<?php ob_start() ?>
    <form action="">
                <input type="text" placeholder="Saisissez votre ville...">
                <input type="button" value="Rechercher">
            </form>
            <?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";