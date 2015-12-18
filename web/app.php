<?php

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\FrontController\FrontController;

$frontController = new FrontController();
$frontController->run();