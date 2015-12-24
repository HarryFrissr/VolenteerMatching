<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:39
 */

namespace Frissr\Volunteer\Command;

use Doctrine\DBAL\Connection;

class clearDatabaseCommand extends BaseCommand {


    public function execute() {
        $this->conn->query('delete from events');
        $this->conn->query('delete from matches');
        $this->conn->query('delete from users where id > 1');
    }
} 