<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class controller {
    public function render(array $GET, array $POST) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Should place validation in a separate, private function. Errors should go in an array: no echo'ing in the controller.
            if (!isset($_POST['inputFirstName'])) {
                echo "First name field empty";
            }
            if (!isset($_POST['inputLastName'])) {
                echo "Last name field empty";
            }
            if (!isset($_POST['inputUserName'])) {
                echo "User name field empty";
            }
            if (!isset($_POST['inputPassword'])) {
                echo "Password field empty";
            }
            if (!isset($_POST['inputVerifyPass'])) {
                echo "Password verify field empty";
            }
            if ($_POST['inputPassword'] !== $_POST['inputVerifyPass']) {
                echo "Password and Verify password fields need to match";
            }
            if (!isset($_POST['inputLinkedin'])) {
                echo "Linkedin field empty";
            }
            if (!filter_var($_POST['inputLinkedin'], FILTER_VALIDATE_URL)) {
                echo "Linkedin field doesn't have a valid url";
            }
            if (!isset($_POST['inputGithub'])) {
                echo "Github field empty";
            }
            if (!filter_var($_POST['inputGithub'], FILTER_VALIDATE_URL)) {
                echo "Github field doesn't have a valid url";
            }
            if (!isset($_POST['inputEmail'])) {
                echo "Email field empty";
            }
            if (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
                echo "Email field doesn't have a valid email";
            }
            if (!isset($_POST['inputAvatar'])) {
                echo "Avatar field empty";
            }
            if (!filter_var($_POST['inputAvatar'], FILTER_VALIDATE_URL)) {
                echo "Avatar field doesn't have a valid url";
            }
            if (!isset($_POST['inputVideo'])) {
                echo "Video field empty";
            }
            if (!filter_var($_POST['inputVideo'], FILTER_VALIDATE_URL)) {
                echo "Video field doesn't have a valid url";
            }
            if (!isset($_POST['inputQuote'])) {
                echo "Quote field empty";
            }
            if (!isset($_POST['inputQuoteAuthor'])) {
                echo "Quote author field empty";
            } else {
                $this->inserter();
            }
        }
        $users = $this->loader();
        require 'view/homepage.php';
    }

    private function inserter() {
        $connection = openConnection();

        // Could make a user class, set these as parameters
        $firstName = trim(htmlspecialchars($_POST['inputFirstName']));
        $lastName = trim(htmlspecialchars($_POST['inputLastName']));
        $userName = trim(htmlspecialchars($_POST['inputUserName']));
        $password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);
        $linkedIn = trim(htmlspecialchars($_POST['inputLinkedin']));
        $github = trim(htmlspecialchars($_POST['inputGithub']));
        $email = trim(htmlspecialchars($_POST['inputEmail']));
        $language = trim(htmlspecialchars($_POST['inputLanguage']));
        $avatar = trim(htmlspecialchars($_POST['inputAvatar']));
        $video = trim(htmlspecialchars($_POST['inputVideo']));
        $quote = trim(htmlspecialchars($_POST['inputQuote']));
        $quoteAuthor = trim(htmlspecialchars($_POST['inputQuoteAuthor']));

        $preparation = $connection->prepare("INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, password) VALUES (:first_name, :last_name, :username, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author, :password)");
        $preparation->bindValue(':first_name', $firstName, PDO::PARAM_STR);
        $preparation->bindValue(':last_name', $lastName, PDO::PARAM_STR);
        $preparation->bindValue(':username', $userName, PDO::PARAM_STR);
        $preparation->bindValue(':linkedin', $linkedIn, PDO::PARAM_STR);
        $preparation->bindValue(':github', $github, PDO::PARAM_STR);
        $preparation->bindValue(':email', $email, PDO::PARAM_STR);
        $preparation->bindValue(':preferred_language', $language, PDO::PARAM_STR);
        $preparation->bindValue(':avatar', $avatar, PDO::PARAM_STR);
        $preparation->bindValue(':video', $video, PDO::PARAM_STR);
        $preparation->bindValue(':quote', $quote, PDO::PARAM_STR);
        $preparation->bindValue(':quote_author', $quoteAuthor, PDO::PARAM_STR);
        $preparation->bindValue(':password', $password, PDO::PARAM_STR);
        try {
            $preparation->execute();
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            echo $e->getCode();
        }

    }
    private function loader() {
        $connection = openConnection();
        return $connection->query("SELECT id,first_name, last_name, email, preferred_language FROM student");
    }
}