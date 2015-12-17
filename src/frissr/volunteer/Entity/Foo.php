<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 14-12-15
 * Time: 17:47
 */

namespace Frissr\Volunteer\Entity;

/**
 * This is just a Foo class. It does nothing. You can test some things.
 * Class Foo
 * @package Frissr\Volunteer\Entity
 */
class Foo {

    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name = 'undefined') {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->getName();
    }
}