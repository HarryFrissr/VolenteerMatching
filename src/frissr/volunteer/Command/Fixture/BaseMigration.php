<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 24-12-15
 * Time: 12:00
 */

namespace Frissr\Volunteer\Command\Fixture;

use Doctrine\DBAL\Connection;

abstract class BaseMigration {
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    abstract public function getTitle();

    abstract public function execute();
}