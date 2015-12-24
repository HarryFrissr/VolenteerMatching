<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:28
 */

namespace Frissr\Volunteer\Command\Fixture;

class loadUserFixture extends BaseMigration {

    public function getTitle() {
        return 'Load Users';
    }

    public function execute() {
        // TODO Controleer of de gebruikers reeds bestaan
        $queries[] = "INSERT INTO `users` (`name`, `email`, `active`, `locked`) VALUES ('admin', 'admin@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `users` (`name`, `email`, `active`, `locked`) VALUES ('harry', 'harry@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `users` (`name`, `email`, `active`, `locked`) VALUES ('mike', 'mike@frissr.nl', '1', '1');";
        $queries[] = "INSERT INTO `users` (`name`, `email`, `active`, `locked`) VALUES ('sandra', 'sandra@frissr.nl', '1', '0');";

        foreach ($queries as $query)
        {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
} 