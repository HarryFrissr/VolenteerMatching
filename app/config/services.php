<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 10:46
 */

use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * A container is just the place to put object instances. You can call the instances - services - from the container by
 * name.
 *
 *   $foo = $container->get('foo');
 *
 *   echo $foo;
 */

$container = new ContainerBuilder();
$container->register('foo', 'Frissr\Volunteer\Entity\Foo');
$container->register('fixed_refugee_list', 'Frissr\Volunteer\Service\FixedRefugeeService');