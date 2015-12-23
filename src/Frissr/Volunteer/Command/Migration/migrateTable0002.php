<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:22
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;

class migrateTable0002 {

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
        return 'Create Match Table';
    }

    private function getSQL() {
        return 'CREATE TABLE Matches (' .
            'id int NOT NULL PRIMARY KEY,' .
            'refugee int,' .
            'volunteer int,' .
            'active boolean,' .
            'updated datetime' .
        ');';
    }
} 