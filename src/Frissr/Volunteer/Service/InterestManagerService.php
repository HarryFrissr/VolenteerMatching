<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/23/2015
 * Time: 4:08 PM
 */

namespace Frissr\Volunteer\Service;


class InterestManagerService
{
    protected $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function findInterestByName($name){
        $sql="SELECT * FROM Interests WHERE name='$name';";
        return $this->conn->query($sql);
    }

    public function addInterest($name, $category, $description){
        $sql="INSERT INTO Interests VALUES(null,'$name','$category','$description');";
        return $this->conn->query($sql);
    }
}