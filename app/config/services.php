<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 10:46
 */

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Faker\Factory;

use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;

/**
 * A container is just the place to put object instances. You can call the instances - services - from the container by
 * name.
 *
 *   $foo = $container->get('foo');
 *
 *   echo $foo;
 */

$container = new ContainerBuilder();

$loader = new FilesystemLoader(__DIR__.'/../views/%name%');
$session = new Symfony\Component\HttpFoundation\Session\Session();
$session->start();

$templating = new PhpEngine(new TemplateNameParser(), $loader);

$faker = Factory::create();

$container->set('templating', $templating);

// Zet een service - bij instantie
$container->set('faker', $faker);
$container->set('session' , $session);

// Registeer een service - bij naam
$container->register('foo', 'Frissr\Volunteer\Entity\Foo');
$container->set('fixed_refugee_list', new Frissr\Volunteer\Service\FixedRefugeeService($faker));

$container->register('message_service', 'Frissr\Volunteer\Service\MessageService');
$container->register('send_message_service', 'Frissr\Volunteer\Service\SendMessageService');

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    // When using mySQL
//    'dbname' => 'mydb',
//    'user' => 'user',
//    'password' => 'secret',
//    'host' => 'localhost',
//    'driver' => 'pdo_mysql',

    // When using sqlite
    'url' => 'sqlite://db.sqlite'
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$container->set('db', $conn);