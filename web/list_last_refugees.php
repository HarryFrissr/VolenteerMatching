<?php
// TODO Weer de autoload. Probeer deze eenmalig aan te roepen in de index.php - de FrondtController
// TODO - Refactor de unit.
// TODO - Haal de namen op uit een cache/sessie/database
// TODO - Maak een object dit het ophalen van de objecten regelt
// TODO - Maak de View apart

require_once __DIR__ . '/../vendor' . '/autoload.php';


/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 11-12-15
 * Time: 14:24
 */

use Frissr\Volunteer\Entity\Refugee;
use Faker\Factory;

$faker = Faker\Factory::create();

$refugees = [];
$refugees[] = new Refugee($faker->name);
$refugees[] = new Refugee($faker->name);
$refugees[] = new Refugee($faker->name);
$refugees[] = new Refugee($faker->name);
$refugees[] = new Refugee($faker->name);

for ($i = 0; $i < 5; $i++) {
    $refugees[] = new Refugee($faker->name);
}

/**
 * De View
 * @var Refugee $refugee
 */
echo "<h2>Last refugees</h2>";
echo "<ul>";
foreach ($refugees as $refugee) {
    echo "<li>";
    echo $refugee->getName();
    echo "</li>";
}
echo "</ul>";