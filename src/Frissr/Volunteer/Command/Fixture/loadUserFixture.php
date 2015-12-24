<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:28
 */

namespace Frissr\Volunteer\Command\Fixture;

use Doctrine\DBAL\Connection;

class loadUserFixture {

    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function getTitle() {
        return 'Load Users';
    }

    public function execute() {
        // TODO Controleer of de gebruikers reeds bestaan
        $queries[] = "INSERT INTO `frissr_demo`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'admin', 'admin@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `frissr_demo`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'harry', 'harry@frissr.nl', '1', '0');";
        $queries[] = "INSERT INTO `frissr_demo`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'mike', 'mike@frissr.nl', '1', '1');";
        $queries[] = "INSERT INTO `frissr_demo`.`users` (`id`, `name`, `email`, `active`, `locked`) VALUES (NULL, 'sandra', 'sandra@frissr.nl', '1', '0');";

        foreach ($queries as $query)
        {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
} 