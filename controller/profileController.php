<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class profileController {
    public function render(array $GET, array $POST) {
        $user = $this->loader();
        require 'view/profilepage.php';
    }

    private function loader() {
        $connection = openConnection();
        $preparation = $connection->prepare("SELECT * FROM student WHERE id=:id");
        $preparation->execute(['id'=>$_GET['user']]);
        return $preparation->fetch();
    }
}