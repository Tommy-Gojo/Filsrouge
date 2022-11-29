<?php


namespace BackEnd\App\Controllers;

use BackEnd\App\Models\UserManager;

class UserController
{

    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function displayLogin()
    {
        require "../App/Views/connexionView.php";
    }

    public function login()
    {
        if(isset($_POST['pseudo'])){
            $user = $this->userManager->findMail($_POST['email']);
            if ($user){
                    if (password_verify($_POST['password'], $user->getPassword())) {
                        $_SESSION['userConnected'] = $user->getPseudo();
                        $_SESSION['userRole'] = $user->getRole();
                        header("Location: ".URL."connexion");
                    } else {
                    echo "erreur mdp";
                    }
                }else {
                    return false;
                }
            }else{
                echo "Le pseudo rentré n'est pas correcte";
            }
        }

    public function InscrUser()
    {
        $mail = $this->userManager->findMail($_POST['email']);

        if ($mail == true) {
            echo "user existant";
            
        } else {
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->userManager->insertMail($_POST['pseudo'], $_POST['email'],$hash);
            echo "L'utilisateur a été crée";
        }
    }

    public function logOut()
    {
        session_destroy();
        unset($_SESSION['userConnected']);
        header("Location: accueil");
        exit;
    }
}

    
