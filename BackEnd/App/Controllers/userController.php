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
        $user = $this->userManager->findUser($_POST['pseudo']);
        if ($user) {
            if (password_verify($_POST['password'], $user->getPassword())) {
                $_SESSION['userConnected'] = $user->getPseudo();

                header("location:" . URL);
            } else {
                echo "erreur mdp";
            }
        } else {
            echo 'user n\'existe pas';
        }
    }

    public function InscrUser()
    {
        $mail = $this->userManager->findMail($_POST['email']);

        if ($mail == true) {
            echo "user existant";
            
        } else {
            $this->userManager->insertMail($_POST['pseudo'], $_POST['email'], $_POST['password']);
            echo "L'utilisateur a été crée";
        }
    }
}
