<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:22
 */

namespace Frissr\Volunteer\Command\Migration;

class migrateTable0002 extends BaseMigrationTable {

    public function getTitle() {
        return 'Create Match Table';
    }

    protected function getSQL() {
        return 'CREATE TABLE Matches (
            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            refugee int,
            volunteer int,
            active boolean,
            updated datetime
        );';
    }
} 