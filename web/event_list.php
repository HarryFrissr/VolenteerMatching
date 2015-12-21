<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 17:47
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\EventController;

$controller = new EventController();
echo $controller->indexAction();