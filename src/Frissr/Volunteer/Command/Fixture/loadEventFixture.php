<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 23-12-2015
 * Time: 19:15
 */

namespace Frissr\Volunteer\Command\Fixture;
use Doctrine\DBAL\Connection;

class loadEventFixture
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
        return 'Load Events';
    }

    public function execute()
    {

        $queries[] = "INSERT INTO `frissr`.`Person` (`title`, `description`, `date`, `time`, `MaxNumberOfParticipants`, `NumberOfParticipants`, `organiser`, `location`) VALUES ('Christmas Helping', 'blablablalbla', '2015-12-26', '11:40',234,40, 'Frissr', 'Amsterdam');";

        foreach ($queries as $query) {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}