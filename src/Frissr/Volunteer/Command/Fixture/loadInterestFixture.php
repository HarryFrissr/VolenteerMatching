<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/23/2015
 * Time: 7:53 PM
 */

namespace Frissr\Volunteer\Command\Fixture;

class loadInterestFixture extends BaseFixture
{
    public function getTitle() {
        return 'Load Interests';
    }

    public function execute() {
        // TODO Controleer of de gebruikers reeds bestaan

        $queries[] = "INSERT INTO `interests` (`id`, `name`, `category`, `description`) VALUES (NULL, 'Soccer', 'Sport', 'Soccer is for hooligans');";


        foreach ($queries as $query)
        {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}