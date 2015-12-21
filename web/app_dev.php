<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 18-12-15
 * Time: 7:02
 *
 * Same as app.php Front Controller. Only with debug information
 */

error_reporting(E_ALL);
ini_set("display_errors", "1");

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\FrontController\FrontController;

// TODO Limit the access by IP address
// if IP address not in 127.0.0.1 then ....

$frontController = new FrontController($container);

echo $frontController->run();