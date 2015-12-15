<h2>Meet refugees</h2>

<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 14-12-15
 * Time: 20:48
 */

// TODO Weer die autoload, vind een oplossing om deze alleen in bijvoorbeeld de index.php aan te roepen
require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volenteer\Controller\MeetRefugeeController;


$controller = new MeetRefugeeController();
echo $controller->listAction();