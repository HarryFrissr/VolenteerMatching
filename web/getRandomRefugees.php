<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 9:56
 */

// TODO Two require once. Remove them by refactoring
require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

use Frissr\Volunteer\Service\FixedRefugeeService;
use Frissr\Volunteer\Entity\Refugee;

$count = 4;

// TODO Maak gegbruik van een Interface. Ik wil weten welke methodes ik kan en mag aanroepen
//$service = $container->get('fixed_refugee_list');
//$refugees = $service->getRefugees($count);

//$me_service = $container->get('message_service');
//var_dump($me_service->findAll());

$faker = $container->get('faker');
echo $faker->name . ' (' . $faker->email . ')';
echo '<br>';
echo $faker->text;
echo '<br>';
echo $faker->name . ' (' . $faker->email . ')';
echo '<br>';
echo $faker->text;
echo '<br>';
echo '<br>';
die;
/**
 * De View
 * @var Refugee $refugee
 */
echo "<h2>{$count} random refugees</h2>";
echo "<ul>";
if (count($refugees) == 0) {
    echo "<li>";
    echo "Geen vluchtelingen gevonden,.";
    echo "</li>";
}
foreach ($refugees as $refugee) {
    echo "<li>";
    // TODO Maak een link naar de details van deze vluchteling
    echo "<a href=#>{$refugee->getName()}</a>";
    echo "</li>";
}
echo "</ul>";