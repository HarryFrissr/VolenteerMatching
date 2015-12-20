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

use Doctrine\Common\ClassLoader;

require '../../vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader('Doctrine', '/path/to/doctrine');
$classLoader->register();

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => 'database',
    'user' => 'user',
    'password' => 'password',
    'host' => 'localhost',
    'port' => 3306,
    'charset' => 'utf8',
    'driver' => 'pdo_mysql',
);
$db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

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
$container->set('db',$db);

$schema = new Doctrine\DBAL\Schema\Schema();
$usersTable = $schema->createTable("Users");

$usersTable->addColumn("id", "integer", array("unsigned" => true));
$usersTable->addColumn("first_name", "string", array("length" => 64));
$usersTable->addColumn("last_name", "string", array("length" => 64));
$usersTable->addColumn("email", "string", array("length" => 256));
$usersTable->addColumn("website", "string", array("length" => 256));

$usersTable->setPrimaryKey(array("id"));

$platform = $conn->getDatabasePlatform();
$queries = $schema->toSql($platform);



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