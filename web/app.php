<?php

/**
 * Call the FrontController by the following URL:
 * - http://YOUR_URL/app.php?controller/action/parameters
 *
 * For example
 * - http://YOUR_URL/app.php?person/index/parameters
 *
 * where:
 * - app.php is the FrontController
 * - person is the Controller. A PersonController should exists
 * - index is the Action. An indexAction should exists
 * - parameters are the parameters passed.
 */

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\FrontController\FrontController;

$frontController = new FrontController($container);

echo $frontController->run();