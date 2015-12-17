<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/17/2015
 * Time: 3:44 PM
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\ContactController;

$controller = new ContactController();
echo $controller->indexAction();