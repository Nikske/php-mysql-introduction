<?php
declare(strict_types=1);

require 'model/connection.php';

require 'controller/profileController.php';

$controller = new profileController();
$controller->render($_GET, $_POST);
