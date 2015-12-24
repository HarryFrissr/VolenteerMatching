<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 22-12-2015
 * Time: 16:29
 */

namespace Frissr\Volunteer\Command\Fixture;

class loadPersonFixture extends BaseFixture
{
    public function getTitle()
    {
        return 'Load Persons';
    }

    public function execute()
    {
        $queries[] = "INSERT INTO `Person` (`firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES ('admin', 'admin', '1975-04-02','admin@frissr.nl','wachtwoord', '1', '0');";
        $queries[] = "INSERT INTO `Person` (`firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES ('harry', 'valk', '1983-11-09','harry@frissr.nl', 'wachtwoord', '1', '0');";
        $queries[] = "INSERT INTO `Person` (`firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES ('mike', 'lepel','1945-7-29','mike@frissr.nl', 'wachtwoord', '1', '1');";
        $queries[] = "INSERT INTO `Person` (`firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES ('sandra','huis','1967-06-22','sandra@frissr.nl', 'wachtwoord', '1', '0');";

        foreach ($queries as $query) {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}

