<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 23-12-2015
 * Time: 20:01
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;
use Exception;

class BaseMigrationTable
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
        throw new Exception('Overschrijf deze');
    }

    protected function getSQL() {
        throw new Exception('Overschrijf deze');
    }
}