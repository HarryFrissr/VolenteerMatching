<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 16-12-15
 * Time: 10:55
 */

//TODO Weer die autoload, vind een oplossing om deze alleen in bijvoorbeeld de index.php aan te roepen
require_once __DIR__ . './../vendor' . '/autoload.php';


use Frissr\Volunteer\Controller\LoginController;

$name = $_POST['person_name'];
$password = $_POST['person_password'];
$forgotpassword = $_POST['check'];

$controller = new LoginController;


if (isset($_POST['check'])) {
    $controller->forgotPassword();
}

if (isset($_POST['person_name'])and (isset($_POST['person_password']))) {
    $controller-> handleLoginAction();
}
else {
    $controller->loginAction();
}
