<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:39
 */

namespace Frissr\Volunteer\Command;

use Doctrine\DBAL\Connection;

class clearDatabaseCommand {
    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function execute() {
        $this->conn->query('delete from matches');
        $this->conn->query('delete from users where id > 1');
    }
} 