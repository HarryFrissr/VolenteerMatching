<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 24-12-15
 * Time: 9:07
 */

namespace Frissr\Volunteer\Command;

use Doctrine\DBAL\Connections;

class BaseCommand {
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }
} 