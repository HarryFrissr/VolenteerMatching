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

class FixturesController extends Controller {

    public function indexAction() {
        return '<a href="app.php?fixtures/start">Load Fixtures</a>';
    }

    public function startAction() {
        $fixtures[] = new loadUserFixture($this->get('db'));
        $fixtures[] = new loadInterestFixture($this->get('db'));

        echo 'Load fixtures: <br>';
        foreach ($fixtures as $fixture) {
            echo $fixture->getTitle() . ' <br>';
            $fixture->execute();
        }
        echo 'Ready <br>';
    }
} 