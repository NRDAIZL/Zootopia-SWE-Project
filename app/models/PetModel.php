<?php

class PetModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllPets()
    {
        $sql = "SELECT * FROM pets p JOIN users u ON u.ID = p.owner_id";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getDistinctPetTypes()
    {
        $sql = "SELECT DISTINCT pet_type FROM pets";
        $pet_types = $this->conn->query($sql);
        return $pet_types;
    }

    public function searchPets($petType) {
        $sql = "SELECT * FROM pets p JOIN users u ON u.ID = p.owner_id WHERE p.pet_type = '$petType'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
