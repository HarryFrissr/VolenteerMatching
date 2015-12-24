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

class migrateDatabaseController extends Controller {

    public function indexAction() {
        return '<h2>acties</h2><a href="app.php?migrateDatabase/start">Start Migrate</a>';
    }

    public function startAction() {
        // Load them from a resource
        $migrations[] = new migrateTable0001($this->get('db'));
        $migrations[] = new migrateTable0002($this->get('db'));
        $migrations[] = new migrateTable0003($this->get('db'));

        echo 'Start migration: <br>';
        foreach ($migrations as $migration) {
            // TODO Ignore migrations already done
            echo $migration->getTitle() . ' <br>';
            $migration->execute();
        }
        echo 'Ready <br>';
    }
} 