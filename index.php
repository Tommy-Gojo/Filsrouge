<?php

session_start();

require_once "vendor/autoload.php";

use BackEnd\App\Controllers\UserController;


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

$userController =  new UserController();

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
                $userController->login();
                break;
            case "crud":
                require_once "BackEnd/App/Views/crud.php";
                break;
                // var_dump($url[0]) ;
                break;
            case "deconnexion":
                // require_once "BackEnd/App/Views/Deconnexion.php";
                $userController->logOut();
                break;
            case "inscription":
                require_once "BackEnd/App/Views/inscriptionView.php";
                break;
            case "ValiderInscription":
                $userController->InscrUser();
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
