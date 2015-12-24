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
use Symfony\Component\Templating\Helper\SlotsHelper;

/**
 * A container is just the place to put object instances. You can call the instances - services - from the container by
 * name.
 *
 *   $foo = $container->get('foo');
 *
 *   echo $foo;
 */

/**
 * De algemene Container. Zet hierin je services
 */
$container = new ContainerBuilder();

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => 'frissr_demo',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'port' => 3306,
    'charset' => 'utf8',
    'driver' => 'pdo_mysql',

    // When using sqlite
    // 'url' => 'sqlite://db.sqlite'
);
$db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$container->set('db', $db);


$session = new Symfony\Component\HttpFoundation\Session\Session();
$session->start();

// Templating
$loader = new FilesystemLoader(__DIR__.'/../views/%name%');
$templating = new PhpEngine(new TemplateNameParser(), $loader);
$templating->set(new SlotsHelper());
$container->set('templating', $templating);

// Zet een service - bij instantie

$container->set('faker', Factory::create());
$container->set('session' , $session);


// Registeer een service - bij naam
$container->register('foo', 'Frissr\Volunteer\Entity\Foo');
$container->set('fixed_refugee_list', new Frissr\Volunteer\Service\FixedRefugeeService($faker));

$container->register('message_service', 'Frissr\Volunteer\Service\MessageService');
$container->register('send_message_service', 'Frissr\Volunteer\Service\SendMessageService');

$container->register('translation_service', 'Frissr\Volunteer\Service\TranslationService');


$container->set('register', new Frissr\Volunteer\Service\RegisterAccountService($conn));


$schema = new Doctrine\DBAL\Schema\Schema();
$usersTable = $schema->createTable("Users");

$usersTable->addColumn("id", "integer", array("unsigned" => true));
$usersTable->addColumn("first_name", "string", array("length" => 64));
$usersTable->addColumn("last_name", "string", array("length" => 64));
$usersTable->addColumn("email", "string", array("length" => 256));
$usersTable->addColumn("website", "string", array("length" => 256));

$usersTable->setPrimaryKey(array("id"));

// TODO Place in own class
//Person Table
    $personTable = $schema->createTable("Person");
    $personTable->addColumn("id", "integer", array("unsigned" => true, "autoincrement" => true));
    $personTable->addColumn("firstName", "string", array("length" => 64));
    $personTable->addColumn("lastName", "string", array("length" => 64));
    $personTable->addColumn("dateOfBirth", "date", array("length" => 8));
    $personTable->addColumn("email", "string", array("length" => 256));
    $personTable->addColumn("password", "date", array("length" => 8));

// TODO add profile image    $personTable->addColumn("profile_image", "object", array("length" => 1));

// TODO Place in own class
//Interest Table
    $interestTable = $schema->createTable("Interests");
    $interestTable->addColumn("name", "string", array("length" => 256));
    $interestTable->addColumn("category", "string", array("length" => 256));

// TODO Place in own class
// Event Table
    $eventTable = $schema->createTable("Events");
    $eventTable->addColumn("title", "string", array("length" => 256));
    $eventTable->addColumn("description", "text", array("length" => 256));
    $eventTable->addColumn("date", "date", array("length" => 256));
    $eventTable->addColumn("time", "time", array("length" => 256));
    $eventTable->addColumn("maxNumberOfParticipants", "integer", array("unsigned" => true));
    $eventTable->addColumn("NumberOfParticipants", "integer", array("unsigned" => true));
    $eventTable->addColumn("location", "string", array("length" => 256));
    $eventTable->addColumn("organiser", "string", array("length" => 256));

// TODO Place in own class
//Foo Table
    $fooTable = $schema->createTable("Foo");
    $fooTable->addColumn("title", "string", array("length" => 256));

// TODO Place in own class
//Location Table
    $locationTable = $schema->createTable("Location");
    $locationTable->addColumn("City", "string", array("length" => 256));
    $locationTable->addColumn("street", "string", array("length" => 256));
    $locationTable->addColumn("streetNumber", "integer", array("unsigned" => true));
    $locationTable->addColumn("zip code", "string", array("length" => 10));

// TODO Place in own class
// TODO Do not use the & in naming
//Refugee/Volunteer Table
    $refugee_volunteerTable = $schema->createTable("refugee&volunteerTable");
    $refugee_volunteerTable->addColumn("refugee", "boolean");
    $refugee_volunteerTable->addColumn("volunteer", "boolean");

//    $platform = $conn->getDatabasePlatform();
//    $queries = $schema->toSql($platform);

