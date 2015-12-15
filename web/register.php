<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 14-12-15
 * Time: 7:33
 */

//Weer die autoload, vind een oplossing om deze alleen in bijvoorbeeld de index.php aan te roepen
require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\RegisterController;

$name = $_POST['person_name'];
$email = $_POST['person_email'];
$accept = $_POST['person_accept'];

$controller = new RegisterController();
if (isset($name) && isset($email) && isset($accept)) {
    $controller->handleRegisterAction($name, $email, $accept);
} else {
    $controller->registerAction($name, $email, $accept);
}