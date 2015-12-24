<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/23/2015
 * Time: 4:08 PM
 */

namespace Frissr\Volunteer\Service;


class InterestManager
{
    protected $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }

    public function findInterestByName(string $name){
        $sql="SELECT * FROM Interest WHERE name='".$name."';";
        return $this->conn->query($sql);
    }

    public function addInterest(){

    }
}