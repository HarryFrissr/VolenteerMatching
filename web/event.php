<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 17-Dec-15
 * Time: 19:24
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\EventController;

$controller = new EventController();
echo $controller->showAction();