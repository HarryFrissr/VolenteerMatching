<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 21-12-15
 * Time: 13:05
 */

namespace Frissr\Volunteer\Service;

class makeDB
{
    /**
     * makeDB constructor.
     */
    public function __construct()
    {
       $sql= 'CREATE DATABASE db';
       $conn->exec($sql);
    }
}

class PersonDb
{
    public function __construct() {

        $sql= 'CREATE TABLE person';
        $conn-> exec($sql);
   }

    public function fillTable () {

            $sql = 'INSERT INTO person VALUES ()';
    }

    public function updateTable() {

   }

   public function getinfo() {
            $sql = 'SELECT * FROM person ';
            $info = $conn->query($sql);
   }

}