<?php
declare(strict_types=1);

require 'model/connection.php';

require 'controller/loginController.php';

session_start();

$controller = new loginController();
$controller->render($_GET, $_POST);