<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 22-12-2015
 * Time: 16:17
 */

namespace Frissr\Volunteer\Command\Migration;


class migrateTable0003 {
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
        return 'Create Person Table';
    }
// Id en email zijn unique zodat men niet onbeperkt account kan aanmaken met één email
    private function getSQL() {
        return 'CREATE TABLE Person (' .
        'id int NOT NULL AUTO_INCREMENT PRIMARY KEY,' .
        'firstName varchar(255),' .
        'lastName varchar(255),' .
        'dateOfBirth date(8),' .
        'email varchar(255) ,' .
        'password varchar(8) ,' .
        'active boolean ,' .
        'locked boolean ,' .
        'CONSTRAINT [uc_Person] UNIQUE(id, email)' .
        ');';
    }


}

