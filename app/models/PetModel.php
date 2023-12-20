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
        $sql = "SELECT p.*, u.Fname, u.Lname FROM pets p JOIN users u ON u.ID = p.owner_id";

        $result = $this->conn->query($sql);
        echo "<script>console.log('this is a Variable:  );</script>";
        return $result;
    }

    public function getDistinctPetTypes()
{
    $sql = "SELECT DISTINCT pet_type FROM pet_breed";
    $pet_types = $this->conn->query($sql);

    $petTypeArray = array();

    while ($row = $pet_types->fetch_assoc()) {
        $petTypeArray[] = $row['pet_type'];
    }

    return $petTypeArray;
}


public function searchPets($petType)
{
    $sql = "SELECT * FROM pets p JOIN users u ON u.ID = p.owner_id WHERE p.pet_type = '$petType'";
    $result = $this->conn->query($sql);

    return $result;
}
}
