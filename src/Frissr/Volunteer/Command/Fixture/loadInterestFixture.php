<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/23/2015
 * Time: 7:53 PM
 */

namespace Frissr\Volunteer\Command\Fixture;


class loadInterestFixture
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function getTitle() {
        return 'Load Interests';
    }

    public function execute() {
        // TODO Controleer of de gebruikers reeds bestaan
        $queries[] = "INSERT INTO `frissr`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'admin', 'admin@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `frissr`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'harry', 'harry@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `frissr`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'mike', 'mike@frissr.nl', '1', '1');";
        $queries[] = "INSERT INTO `frissr`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'sandra', 'sandra@frissr.nl', '1', '0');";

        foreach ($queries as $query)
        {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}