<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 9:56
 */

require_once __DIR__ . './../vendor' . '/autoload.php';

use Frissr\Volenteer\Service\FixedRefugeeService;
use Frissr\Volenteer\Entity\Refugee;

$count = 8;
// TODO Maak hier een service van
$service = new FixedRefugeeService();
$refugees = $service->getRefugees($count);

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