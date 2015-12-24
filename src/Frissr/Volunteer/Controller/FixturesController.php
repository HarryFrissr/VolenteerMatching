<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:32
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Command\Fixture\loadInterestFixture;
use Frissr\Volunteer\Command\Fixture\loadUserFixture;
use Frissr\Volunteer\Command\Fixture\loadEventFixture;
use Frissr\Volunteer\Command\Fixture\loadPersonFixture;
use Frissr\Volunteer\Command\Fixture\BaseFixture;

class FixturesController extends Controller {

    public function indexAction() {
        return '<a href="?fixtures/start">Load Fixtures</a>';
    }

    public function startAction() {
        // TODO Load all fixtures from the folder - http://php.net/manual/en/function.scandir.php
        $fixtures[] = new loadUserFixture($this->get('db'));
        $fixtures[] = new loadPersonFixture($this->get('db'));
        $fixtures[] = new loadEventFixture($this->get('db'));
        $fixtures[] = new loadInterestFixture($this->get('db'));

        echo 'Load fixtures: <br>';
        /**
         * @var $fixture BaseFixture
         */
        foreach ($fixtures as $fixture) {
            echo $fixture->getTitle() . ' <br>';
            $fixture->execute();
        }
        echo 'Ready <br>';
    }
} 