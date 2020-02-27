<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class loginController {
    public function render(array $GET, array $POST) {
        if ($_SESSION['loginKey']) {
          // Could show the user's profile page when he's already logged in.
            echo "ALL GOOD, PAL";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!isset($_POST['loginUser'])) {
                echo "User name is empty";
            }
            if (!isset($_POST['loginPass'])) {
                echo "Password is empty";
            } else {
                $this->login();
            }
        }

        require 'view/loginpage.php';
    }

    private function login() {
        $connection = openConnection();

        $user = trim(htmlspecialchars($_POST['loginUser']));
        $pass = trim(htmlspecialchars($_POST['loginPass']));

        $prep = $connection->prepare("SELECT password FROM student WHERE username=:username");
        $prep->bindValue(':username', $user, PDO::PARAM_STR);
        $prep->execute();
        $dbPass = $prep->fetch();

       if (password_verify($pass, $dbPass[0])) {
           $_SESSION['loginKey'] = true;
           echo "alright";
           // The idea was to redirect to the user's profile page
           header("location: ../profile.php");
       } else {
           echo "password's wrong";
       }

    }
}