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
    naam VARCHART(55),
    category VARCHART(55),
    decsription TEXT(1000)


 )";

$conn->query($testTable);

echo "Table Created";