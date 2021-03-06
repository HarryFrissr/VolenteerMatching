<?php

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Command\Migration\migrateTable0001;
use Frissr\Volunteer\Command\Migration\migrateTable0002;
use Frissr\Volunteer\Command\Migration\migrateTableEvent;
use Frissr\Volunteer\Command\Migration\migrateTableMessages;
use Frissr\Volunteer\Command\Migration\migrateTablePerson;
use Frissr\Volunteer\Command\Migration\BaseMigrationTable;
use Frissr\Volunteer\Command\Migration\migrateTable122320151845;
use Exception;

class MigrateDatabaseController extends Controller {

    public function indexAction() {
        return '<h2>acties</h2><a href="?migrateDatabase/start">Start Migrate</a>';
    }

    public function getMigrations(){
        // TODO Load all migration from the folder - http://php.net/manual/en/function.scandir.php
        $migrations[] = new migrateTable0001($this->get('db'));
        $migrations[] = new migrateTable0002($this->get('db'));
        $migrations[] = new migrateTableEvent($this->get('db'));
        $migrations[] = new migrateTableMessages($this->get('db'));
        $migrations[] = new migrateTablePerson($this->get('db'));
        $migrations[] = new migrateTable122320151845($this->get('db'));

        return $migrations;
    }

    public function startAction() {
        $migrations = $this->getMigrations();

        echo 'Start migration: <br>';
        /**
         * @var $migration BaseMigrationTable
         */
        foreach ($migrations as $migration) {
            // TODO Ignore migrations already done
            echo $migration->getTitle() . ' <br>';

            try {
                $migration->execute();
            } catch (Exception $e) {
                echo '2Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        echo 'Ready <br>';
    }


    public function statusAction() {
        $migrations = $this->getMigrations();

        echo 'List of migrations: <br>';
        /**
         * @var $migration BaseMigrationTable
         */
        foreach ($migrations as $migration) {
            echo $migration->getTitle() . ' <br>';
        }
    }
} 