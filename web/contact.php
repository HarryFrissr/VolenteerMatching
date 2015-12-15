<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:25
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volenteer\Controller\ContactController;

$controller = new ContactController();
echo $controller->indexAction();