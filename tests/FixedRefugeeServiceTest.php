<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:13
 */

use Frissr\Volunteer\Service\FixedRefugeeService;

class FixedRefugeeServiceTest extends PHPUnit_Framework_TestCase {

    public function testService() {
        $service = new FixedRefugeeService();
        $this->getCount(0, $service->getRefugees(0));
        $this->getCount(4, $service->getRefugees(4));
        $this->getCount(10, $service->getRefugees(10));
    }
}
