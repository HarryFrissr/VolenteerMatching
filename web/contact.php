<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:25
 */

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\Volunteer\Controller\ContactController;

$controller = new ContactController($container);
echo $controller->indexAction();