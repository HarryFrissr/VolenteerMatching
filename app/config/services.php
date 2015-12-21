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


// DBAL service

//use Doctrine\Common\ClassLoader;
//require '../vendor/doctrine/common/lib/Doctrine/Common';
//$classloader = new ClassLoader('Doctrine', './Doctrine/doctrine-dbal');
//$classloader->register();

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'test',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost:3306',
    'driver' => 'pdo_mysql',
);


$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$container->set('db', $conn);

$schema = new \Doctrine\DBAL\Schema\Schema();
//Person Table
$personTable = $schema->createTable("Person");
$personTable->addColumn("id", "integer", array("unsigned" => true));
$personTable->addColumn("first_name", "string", array("length" => 64));
$personTable->addColumn("last_name", "string", array("length" => 64));
$personTable->addColumn("e-mail", "string", array("length" => 256));

$personTable->addColumn("profile_image", "object", array("length" => 1));
$personTable->addColumn("birthday", "string", array("length"=>8));

//Interest Table
$interestTable = $schema->createTable("Interests");
$interestTable->addColumn("name", "string", array("length" => 256));
$interestTable->addColumn("category", "string", array("length" => 256));

// Event Table
$eventTable = $schema->createTable("Events");
$eventTable->addColumn("title", "string", array("length" => 256));
$eventTable->addColumn("description", "text", array("length" => 256));
$eventTable->addColumn("date", "date", array("length" => 256));
$eventTable->addColumn("time","time", array("length" => 256));
$eventTable->addColumn("maxNumberOfParticipants", "integer", array("unsigned" => true));
$eventTable->addColumn("NumberOfParticipants", "integer", array("unsigned" => true));
$eventTable->addColumn("location", "string", array("length" => 256));
$eventTable->addColumn("organiser", "string", array("length" => 256));

//Foo Table
$fooTable = $schema->createTable("Foo");
$fooTable->addColumn("title", "string", array("length" => 256));

//Location Table
$locationTable = $schema->createTable("Location");
$locationTable->addColumn("City", "string", array("length" => 256));
$locationTable->addColumn("street", "string", array("length" => 256));
$locationTable->addColumn("streetNumber", "integer", array("unsigned" => true));
$locationTable->addColumn("zip code", "string", array("length" => 10));

//Refugee/Volunteer Table
$refugee_volunteerTable = $schema->createTable("refugee&volunteerTable");
$refugee_volunteerTable->addColumn("refugee", "boolean");
$refugee_volunteerTable->addColumn("volunteer", "boolean");

$platform = $conn->getDatabasePlatform();
$queries = $schema->toSql($platform);

