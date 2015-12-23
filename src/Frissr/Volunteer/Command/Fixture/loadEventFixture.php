<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 23-12-15
 * Time: 19:54
 */

namespace Frissr\Volunteer\Command\Fixture;

use Doctrine\DBAL\Connection;

class loadEventFixture {

    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function getTitle() {
        return 'Load Events';
    }

    public function execute() {
        // TODO Controleer of de gebruikers reeds bestaan
        $queries[] = "INSERT INTO `Frissr_demo`.`Event` (`id`, `name`, `organiser`, `location`, `maxparticipants`) VALUES ('1', 'Dinner', 'Hiltje', 'Amsterdam', '10');";

        foreach ($queries as $query)
        {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }