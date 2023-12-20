<?php

include_once "../config/dbh.inc.php";
include_once "../models/PetModel.php";

class AdminController
{
    private $model;

    public function __construct()
    {
        $this->model = new PetModel($GLOBALS['conn']);
    }

    public function index()
    {
        $pet_types = $this->model->getDistinctPetTypes();
        $result = $this->model->getAllPets();

        include '../views/admin/allpets.php';
    }
}


// Instantiate the controller and call the index method
$controller = new AdminController();
$controller->index();
