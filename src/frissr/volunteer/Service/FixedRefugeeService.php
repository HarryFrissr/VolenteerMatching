<?php namespace Frissr\Volunteer\Service;
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 12-12-15
 * Time: 9:27
 */

use Frissr\Volunteer\Entity\Refugee;

use Faker\Factory;

class FixedRefugeeService {

    protected $faker;

    public function __construct($faker) {
        $this->faker = $faker;
    }

    /**
     * @param int $limit
     * @return array
     */
    public function getRefugees($limit = 7) {
//        $faker = Factory::create();

        $refugees = [];
        for ($i = 0; $i < $limit; $i++) {
            $refugees[] = new Refugee($this->faker->name);
        }
        return $refugees;
    }
}

