<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 23-12-15
 * Time: 20:31
 */

namespace Frissr\Volunteer\Service;

use Frissr\Volunteer\Entity\Person;
use Doctrine\DBAL\Driver\Connection;

class RegisterAccountService {

    protected $conn;

    public function __construct(Connection $conn) {
        $this->conn = $conn;
    }

    public function execute(Person $person) {
        //
        // create account
        // database
        //
        echo "hello. you have been registered";
    }
} 