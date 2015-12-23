<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 10:52
 */

// TODO A second require_once. Try to use a Front Controller instead.
require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

?>

<h2>Get services</h2>


<?php

$foo = $container->get('foo');

echo $foo;
?>

