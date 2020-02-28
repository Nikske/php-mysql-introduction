<?php
declare(strict_types=1);

// REQUIRES
require 'model/connection.php';
require 'model/insert.php';
// Controllers
require 'controller/controller.php';

session_start();

$controller = new controller();
$controller->render($_GET, $_POST);
