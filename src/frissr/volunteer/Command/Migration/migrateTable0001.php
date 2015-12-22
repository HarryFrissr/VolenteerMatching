<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 13:53
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;

class migrateTable0001 {

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
        return 'Create Users Table';
    }

    private function getSQL() {
        return 'CREATE TABLE Users (' .
        'id int NOT NULL AUTO_INCREMENT PRIMARY KEY,' .
        'name varchar(255),' .
        'email varchar(255),' .
        'active boolean,' .
        'locked boolean' .
        ');';
    }
}