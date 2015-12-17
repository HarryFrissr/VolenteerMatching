<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 17:47
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volunteer\Controller\EntityController;

$controller = new EntityController();
echo $controller->readAction();