<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:34
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volenteer\Controller\FaqController;

$controller = new FaqController();

echo $controller->archiveAction();