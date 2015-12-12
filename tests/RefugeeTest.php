<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 10:25
 */

use Frissr\Volenteer\Entity\Refugee;

class RefugeeTest extends PHPUnit_Framework_TestCase {

    public function testGetter() {
        $refugee = new Refugee('name');
        $this->assertEquals($refugee->getName(), 'name');
        $refugee->setName('unknown');
        $this->assertEquals($refugee->getName(), 'unknown');
        $refugee->setName('');
        $this->assertEquals($refugee->getName(), '');
        $refugee->setName(null);
        $this->assertNull($refugee->getName());
    }
}
 