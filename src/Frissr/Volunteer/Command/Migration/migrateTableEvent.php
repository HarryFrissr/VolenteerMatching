<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 23-12-2015
 * Time: 18:58
 */

namespace Frissr\Volunteer\Command\Migration;

class migrateTableEvent extends BaseMigrationTable
{

    public function getTitle() {
        return 'Create Event Table';
    }

    /**
     * @return string
     */
    protected function getSQL() {
        return 'CREATE TABLE Event (' .
        'title varchar(255),' .
        'description varchar(255),' .
        'date date,' .
        'time time,' .
        'maxNumberOfParticipants int(3),' .
        'numberOfParticipants int(4),' .
        'organiser varchar(255),' .
        'location varchar(255)' .
        ');';
    }
}