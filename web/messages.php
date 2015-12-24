<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:27
 */

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\Volunteer\Controller\MessageController;


if (isset($_GET['chatid'])){
    $chatPartnerId = $_GET['chatid'];
} else {
    $chatPartnerId = 0;
}

$controller = new MessageController($container, $chatPartnerId);


if (isset($_POST['message_content'])){
    $message_content = $_POST['message_content'];
    $controller->messagePost($message_content);
}

$controller->renderView();

