<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class loginController {
    public function render(array $GET, array $POST) {
        $this->loginCheck();
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
        /*echo '<h2>$_SESSION</h2>';
        var_dump($_SESSION);*/
        require 'view/loginpage.php';
    }

    private function loginCheck() {
        if (empty($_SESSION['loginKey'])) {
            $_SESSION['loginKey'] = false;
        }
        /*if ($_SESSION['loginKey']) {
            $connection = openConnection();

            $prep = $connection->prepare("SELECT id FROM student WHERE username=:username");
            $prep->bindValue(':username', $_SESSION['loginName'], PDO::PARAM_STR);
            $prep->execute();
            $dbId = $prep->fetch();
            var_dump($dbId);
            header("location: ../profile.php?user=". $dbId[0] . "");
        }*/
    }

    private function login() {
        $connection = openConnection();

        $_SESSION['loginName'] = trim(htmlspecialchars($_POST['loginUser']));
        $pass = trim(htmlspecialchars($_POST['loginPass']));

        $prep = $connection->prepare("SELECT id, password FROM student WHERE username=:username");
        $prep->bindValue(':username', $_SESSION['loginName'], PDO::PARAM_STR);
        $prep->execute();
        $dbPass = $prep->fetch();

       if (password_verify($pass, $dbPass[1])) {
           $_SESSION['loginKey'] = true;
           header("location: ../profile.php?user=". $dbPass[0] . "");
       } else {
           echo "password's wrong";
       }

    }
}