<?php
declare(strict_types=1);

require 'model/connection.php';

require 'controller/loginController.php';

$controller = new loginController();
$controller->render($_GET, $_POST);