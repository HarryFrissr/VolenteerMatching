<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:00
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Command\Migration\migrateTable0001;
use Frissr\Volunteer\Command\Migration\migrateTable0002;
use Frissr\Volunteer\Command\Migration\migrateTable0003;
use Frissr\Volunteer\Command\Migration\migrateTable122320151845;
use Exception;

class migrateDatabaseController extends Controller {

    public function indexAction() {
        return '<h2>acties</h2><a href="?migrateDatabase/start">Start Migrate</a>';
    }

    public function getMigrations(){
        $migrations[] = new migrateTable0001($this->get('db'));
        $migrations[] = new migrateTable0002($this->get('db'));
        $migrations[] = new migrateTable0003($this->get('db'));
        $migrations[] = new migrateTable122320151845($this->get('db'));

        return $migrations;
    }

    public function startAction() {
        $migrations = $this->getMigrations();

        echo 'Start migration: <br>';
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
        foreach ($migrations as $migration) {
            echo $migration->getTitle() . ' <br>';
        }
    }
} 