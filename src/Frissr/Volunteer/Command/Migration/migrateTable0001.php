<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 13:53
 */

namespace Frissr\Volunteer\Command\Migration;

class migrateTable0001 extends BaseMigrationTable {

    public function getTitle() {
        return 'Create Users Table';
    }

    protected function getSQL() {
        return 'CREATE TABLE Users (
            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name varchar(255),
            email varchar(255),
            active boolean,
            locked boolean
        );';
    }
}
