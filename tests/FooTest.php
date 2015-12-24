<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 23-12-15
 * Time: 18:15
 */

use Frissr\Volunteer\Entity\Foo;

class FooTest extends PHPUnit_Framework_TestCase {

    public function testConstructor() {
        $new = new Foo();
        $this->assertNotNull($new);
        $this->assertEquals($new->getName(), 'undefined');
    }
}
 