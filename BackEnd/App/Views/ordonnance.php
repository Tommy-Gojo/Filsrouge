<?php ob_start() ?>

<article id="accueil-ordo">
    
    <div id="ordo">
        <img src="FrontEnd/assets/img/upload_file_FILL0_wght400_GRAD0_opsz48.svg" id="svg-ordo" alt="">
        <p>Deposer votre ordonnance ici</p>
        <p>ou</p>
        <p>Sélectioner votre ordonnance via ce boutton</p>
        <input type="file" value="Choisir un fichier" id="file" class="file">
    </div>
    
    <p id="text-ordo">text expliquatif
<br>
<br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tempore odit sint molestias, repudiandae, animi magni quaerat eum quibusdam hic nam vitae alias, consectetur perspiciatis aliquam quos aperiam unde facilis.
    Minus, delectus laudantium ad eos suscipit harum earum iure ut temporibus dicta soluta incidunt et necessitatibus voluptatibus optio at sapiente assumenda voluptatem culpa atque officia fugit obcaecati dolorem laboriosam? Officia!
    Eveniet modi cumque reiciendis voluptate voluptas dolor sit? Odio voluptas suscipit numquam natus, libero nostrum dolor fuga quasi? Voluptate libero aperiam recusandae ex saepe non est ad ipsam, autem esse.
    </p>
</article>

<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";