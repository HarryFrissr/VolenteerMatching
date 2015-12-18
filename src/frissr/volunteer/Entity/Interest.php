<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 11-12-15
 * Time: 13:45
 */

namespace Frissr\Volunteer\Entity;


class Interest {

    public function __construct($name, $category)
    {
        $this->name = $name;
        $this->category= $category;
    }




}