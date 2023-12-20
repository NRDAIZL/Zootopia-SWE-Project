<?php

session_start();

include_once "./app/controllers/AdminController.php";

$controller = new AdminController();
$controller->index();
