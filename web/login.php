<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 16-12-15
 * Time: 10:55
 */

//Weer die autoload, vind een oplossing om deze alleen in bijvoorbeeld de index.php aan te roepen
require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\LoginController;

$name = $_POST['person_name'];
$password = $_POST['person_password'];
$forgotpassword = $_POST['check'];

$controller = new LoginController;

// TODO need to check if checkbox is checked (forgot password)
// if checked:
$controller->forgotPassword();
// TODO: need to check if password and name field are not empty
// elseif not empty then:
$controller-> handleLoginAction();
// else (if empty):
$controller->loginAction();

