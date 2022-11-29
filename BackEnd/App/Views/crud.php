<?php ob_start() ?>

    <article>
        <form action="" method="post">
            <label for="">Nom de la pharma</label>
            <input type="text" name="name_pharma">

            <label for="">Numéro de tel</label>
            <input type="text" name="num_pharma">

            <label for="">Photo de la pharma</label>
            <input type="file" name="img_pharma">

            <label for="">Adresse de la pharma</label>
            <input type="text" name="add_pharma">
        </form>
    </article>

<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";