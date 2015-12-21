<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:41
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Command\clearDatabaseCommand;

class databaseController extends Controller {

    public function indexAction() {
        return 'Migrate, Fixture load, delete';
    }

    public function clearAction() {
        $command = new clearDatabaseCommand($this->get('db'));
        $command->execute();

        return 'Database is cleared';
    }
} 