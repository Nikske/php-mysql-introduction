<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class controller {
    public function render(array $GET, array $POST) {
        if (isset($_POST['inputFirstName']) && isset($_POST['inputLastName']) && isset($_POST['inputUserName']) && isset($_POST['inputLinkedin']) && isset($_POST['inputGithub']) && isset($_POST['inputEmail']) && isset($_POST['inputLanguage']) && isset($_POST['inputAvatar']) && isset($_POST['inputVideo']) && isset($_POST['inputQuote']) && isset($_POST['inputQuoteAuthor'])) {
            $this->insert();
        }

        require 'view/homepage.php';
    }

    private function insert() {
        $firstName = trim(htmlspecialchars($_POST['inputFirstName']));
        $lastName = trim(htmlspecialchars($_POST['inputLastName']));
        $userName = trim(htmlspecialchars($_POST['inputUserName']));
        $linkedIn = trim(htmlspecialchars($_POST['inputLinkedin']));
        $github = trim(htmlspecialchars($_POST['inputGithub']));
    }
}