<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 12:02
 */

use Frissr\Volunteer\Entity\Match;
use Frissr\Volunteer\Entity\Volunteer;
use Frissr\Volunteer\Entity\Refugee;

class MatchTest extends PHPUnit_Framework_TestCase {

    public function testEmptyConstructorMatch() {
        $match = new Match();
        $this->assertNull($match->getRefugee());
        $this->assertNull($match->getVolunteer());
//        echo $match->__toString();
    }

    public function testConstructorMatch() {
        $match = new Match(new Volunteer('sample Volunteer'), new Refugee('Sample Refugeer'));
        $this->assertNotNull($match->getRefugee());
        $this->assertNotNull($match->getVolunteer());
//        echo $match->__toString();
    }
}
 