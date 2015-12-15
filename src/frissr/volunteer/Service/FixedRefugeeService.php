<?php namespace Frissr\Volunteer\Service;
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 9:27
 */

use Frissr\Volunteer\Entity\Refugee;

use Faker\Factory;

class FixedRefugeeService {

    // TODO Geef de faker door aan de constructor
    public function __construct() {

    }

    /**
     * @param int $limit
     * @return array
     */
    public function getRefugees($limit = 7) {
        // TODO Vermijd het aanmaken van classes in de methode - SOLID.
        // TODO Geef de class door via de constructor.
        $faker = Factory::create();

        $refugees = [];
        for ($i = 0; $i < $limit; $i++) {
            $refugees[] = new Refugee($faker->name);
        }
        return $refugees;
    }
}