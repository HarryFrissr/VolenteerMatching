<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/21/2015
 * Time: 7:10 PM
 */

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

$conn=$container->get('db');
$testTable= "CREATE TABLE Interests
(
    id INT,
    naam VARCHAR(55),
    category VARCHAR(55),
    description TEXT(1000)


 );

 ";

$testInsert = "
INSERT INTO Interests
VALUES (1,'Dog Test','null','null');";

//$conn->query($testTable);

$selectStatement = "SELECT naam from interests;";
$conn->query($testInsert);

