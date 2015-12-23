<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 22-12-2015
 * Time: 16:29
 */

namespace Frissr\Volunteer\Command\Fixture;

use Doctrine\DBAL\Connection;
class loadPersonFixture
{

    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    public function getTitle()
    {
        return 'Load Persons';
    }

    public function execute()
    {

        $queries[] = "INSERT INTO `frissr`.`Person` (`id`, `firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES (NULL, 'admin', 'admin', '1975-04-02','admin@frissr.nl','wachtwoord', '1', '0');";
        $queries[] = "INSERT INTO `frissr`.`Person` (`id`, `firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES (NULL, 'harry', 'valk', '1983-11-09','harry@frissr.nl', 'wachtwoord', '1', '0');";
        $queries[] = "INSERT INTO `frissr`.`Person` (`id`, `firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES (NULL, 'mike', 'lepel','1945-7-29','mike@frissr.nl', 'wachtwoord', '1', '1');";
        $queries[] = "INSERT INTO `frissr`.`Person` (`id`, `firstName`, `lastName`, `dateOfBirth`, `email`, `password`, `active`, `locked`) VALUES (NULL, 'sandra','huis','1967-06-22','sandra@frissr.nl', 'wachtwoord', '1', '0');";

        foreach ($queries as $query) {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}

