<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 21-12-15
 * Time: 18:51
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';


$conn = $container->get('db');

$users = $conn->query('SELECT id FROM Event');

$row = $users->fetch();
echo $row['location'];


var_dump($users);