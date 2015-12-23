<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 23-12-2015
 * Time: 20:05
 */

namespace Frissr\Volunteer\Command\Migration;


class Foo extends BaseMigrationTable
{
    public function getTitle() {
        return 'Create Foo Table';
    }

    protected function getSQL() {
        return 'CREATE TABLE Foo (' .
        'title varchar(255),' .
        'location varchar(255)' .
        ');';
    }
}