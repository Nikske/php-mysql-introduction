<?php
declare(strict_types=1);

// Requires
require 'model/connection.php';
require 'model/insert.php';
require 'controller/controller.php';

$controller = new controller();
$controller->render($_GET, $_POST);
