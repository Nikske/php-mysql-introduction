<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class controller {
    public function render(array $GET, array $POST) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['inputFirstName']) && isset($_POST['inputLastName']) && isset($_POST['inputUserName']) && isset($_POST['inputLinkedin']) && isset($_POST['inputGithub']) && isset($_POST['inputEmail']) && isset($_POST['inputLanguage']) && isset($_POST['inputAvatar']) && isset($_POST['inputVideo']) && isset($_POST['inputQuote']) && isset($_POST['inputQuoteAuthor'])) {
                $this->insert();
            } else {
                echo "All fields are required.";
            }
        }
        require 'view/homepage.php';
    }

    private function insert() {
        $connection = openConnection();

        $firstName = trim(htmlspecialchars($_POST['inputFirstName']));
        $lastName = trim(htmlspecialchars($_POST['inputLastName']));
        $userName = trim(htmlspecialchars($_POST['inputUserName']));
        $linkedIn = trim(htmlspecialchars($_POST['inputLinkedin']));
        $github = trim(htmlspecialchars($_POST['inputGithub']));
        $email = trim(htmlspecialchars($_POST['inputEmail']));
        $language = trim(htmlspecialchars($_POST['inputLanguage']));
        $avatar = trim(htmlspecialchars($_POST['inputAvatar']));
        $video = trim(htmlspecialchars($_POST['inputVideo']));
        $quote = trim(htmlspecialchars($_POST['inputQuote']));
        $quoteAuthor = trim(htmlspecialchars($_POST['inputQuoteAuthor']));

        $preparation = $connection->prepare("INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:first_name, :last_name, :username, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)");
        $preparation->bindParam(':first_name', $firstName, PDO::PARAM_STR, 50);
        $preparation->bindParam(':last_name', $lastName, PDO::PARAM_STR, 50);
        $preparation->bindParam(':username', $userName, PDO::PARAM_STR, 50);
        $preparation->bindParam(':linkedin', $linkedIn, PDO::PARAM_STR, 255);
        $preparation->bindParam(':github', $github, PDO::PARAM_STR, 255);
        $preparation->bindParam(':email', $email, PDO::PARAM_STR, 50);
        $preparation->bindParam(':preferred_language', $language, PDO::PARAM_STR, 2);
        $preparation->bindParam(':avatar', $avatar, PDO::PARAM_STR,255);
        $preparation->bindParam(':video', $video, PDO::PARAM_STR, 255);
        $preparation->bindParam(':quote', $quote, PDO::PARAM_STR, 255);
        $preparation->bindParam(':quote_author', $quoteAuthor, PDO::PARAM_STR, 50);
        try {
            $preparation->execute();
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            echo $e->getCode();
        }

    }
}