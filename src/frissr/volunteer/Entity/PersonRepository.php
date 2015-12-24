<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 23-12-15
 * Time: 20:22
 */

namespace Frissr\Volunteer\Entity;


class PersonRepository {


    public function findAll() {

    }

    public function find($id) {

        // TODO Afmaken
        $sql = "SELECT * FROM `users` WHERE `id` = $id";


//        array();

//        $person = Person::create();
    }

} 