<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 14-12-15
 * Time: 7:33
 */

//Weer die autoload, vind een oplossing om deze alleen in bijvoorbeeld de index.php aan te roepen
require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\Volunteer\Controller\RegisterController;

$name = $_POST['person_name'];
$email = $_POST['person_email'];
$accept = $_POST['person_accept'];

$controller = new RegisterController($container);
if (isset($name) && isset($email) && isset($accept)) {
    echo $controller->handleRegisterAction($name, $email, $accept);

    // retrieve messages
    $session = $container->get('session');
    foreach ($session->getFlashBag()->get('notice', array()) as $message) {
        echo '<div class="flash-notice">'.$message.'</div>';
    }

} else {
    echo $controller->registerAction($name, $email, $accept);
}