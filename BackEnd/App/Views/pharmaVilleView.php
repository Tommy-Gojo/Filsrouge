<?php ob_start() ?>
<div>
    <ul>
        <li>Filter par :</li>
        <li>Horaire :</li>
        <li>Rendez-vous :</li>
        <li>Les plus proches :</li>
        <li>Les mieux notés</li>

    </ul>
</div>
<article>
    <div class="card">
        <aside>
            <img src="FrontEnd/asstes/img/carte-de-france" alt="">
            <p>Nom de la pharma</p>
            <p>Num de la pharma</p>
            <p>combien de km de la loc</p>
            <p>adresse</p>
        </aside>
        <div>
            <img src="" alt="">
            <!-- <table>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
    </div>
    <div class="card"></div>
</article>


<?php
$content = ob_get_clean();
require_once "BackEnd/App/Views/template.php";
