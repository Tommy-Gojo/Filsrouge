<?php
session_start();

require "vendor/autoload.php";


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));


try {
    if (empty($_GET['page'])) {
        echo "error";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":

                require_once "BackEnd/App/Views/accueil.php";
                break;
            case "ville":
                require_once "BackEnd/App/Views/pharmaVilleView.php";

                break;
            case "connexion":
                require_once "BackEnd/App/Views/connexionView.php";
                // $userController->login();

            case "soigner":
                require_once "BackEnd/App/Views/search-m.php";
                break;
                // var_dump($url[0]) ;
                break;
            case "deconnexion":
                // var_dump($url[0]) ;
                break;
            case "Inscription":
                // require_once "App/Views/inscriptionView.php";
                // break;
            case "ValiderInscription":
                // $userController->InscrUser();
                break;
            case "ordonnance":
                require_once "BackEnd/App/Views/ordonnance.php";
                break;
            default:
                require_once "BackEnd/App/Views/errorView.php";
                throw new Exception('Error 404, page not found');
                
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
}
