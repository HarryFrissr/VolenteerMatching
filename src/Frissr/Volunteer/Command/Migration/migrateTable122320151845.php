<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/23/2015
 * Time: 6:45 PM
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;


class migrateTable122320151845
{

    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function execute() {
        $this->conn->query($this->getSQL());
    }

    public function getTitle() {
        return 'Create Interest Table';
    }
    private function getSQL() {
        return 'CREATE TABLE Interests (' .
        'id int NOT NULL AUTO_INCREMENT PRIMARY KEY,' .
        'name varchar(50),' .
        'category varchar(50),' .
        'description text' .
        ');';
    }
}