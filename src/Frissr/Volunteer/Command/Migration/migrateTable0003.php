<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 23-12-15
 * Time: 17:57
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;

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
        return 'Create Event Table';
    }

    private function getSQl(){
        return 'CREATE TABLE Event(
        id INT(11) NOT NULL ,
        name VARCHAR(128) NOT NULL ,
        organiser VARCHAR(128) NOT NULL ,
        location VARCHAR(128) NOT NULL , PRIMARY KEY (`id`)
        );';
    }
}