<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pharma</title>
    <link rel="stylesheet" href="FrontEnd/assets/style.css">
</head>
<body>
    <header>
        
        <nav id="nav-barre">
            <ul id="ul-svg">
                <li class="svg-flag">
                    <!-- Drapeau pour la langue -->
                    <img src="FrontEnd/assets/img/union-europeenne.png" class="svg svg-flag" alt="">
                    
                </li>
                <li class="svg-acc">
                    <!-- Svg Compte -->
                    <img src="FrontEnd/assets/img/account_circle_FILL0_wght400_GRAD0_opsz48.svg" class="svg svg-user"alt="">
                    <div id="display-none displayNoneAnim"></div>
                    
                </li>
                <li class="svg-basket">
                    <!-- Le Panier -->
                    <img src="FrontEnd/assets/img/shopping_basket_FILL0_wght400_GRAD0_opsz48.svg" class="svg" alt="">
                    
                </li>
            </ul>
        </nav>
        <div id="nav-barre-logo">
            <ul id="nav-menu">
                <li>
                    <a href="">Commander !</a>
                </li>
                <li>
                    <a href="ville">Pharmaville</a>
                </li>
                <li>
                    <a href="ordonnance">Ordonnance</a>
                </li>
                <li>

                    <a href="accueil">Accueil</a>
                </li>
                <li>
                    <a href="connexion">Se connecter</a>
                </li>
            </ul>
        </div> </a>
    </header>
    <main id="bg-img">
        <aside id="left-nav">
            <img src="FrontEnd/assets/img/imgEPharma.png" alt="Image du site" id="logo-site">
            <ul id="left-nav-page">
                <li><a href="">Professionnel De santé</a></li>
                <li><a href="">Le Coté Soins</a></li>
                <li><a href="">Se Soigner Sans Ordonnance</a></li>
                <li><a href="">A Propos De Nous </a></li>
                <li><a href="">Travailler Avec Nous</a></li>
            </ul> 
            <div id="aside-deco">
                <a href="">Se déconnecter </a>
                <a href="">Condition Génerale</a>
            </div>
        </aside>
        <section id="content">
        <?= $content ?> 
        </section>
    </main>
</body>
</html>