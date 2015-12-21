<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 20:23
 */

namespace Frissr\Volunteer\Service;

use Frissr\Volunteer\Entity\Person;

class MessageService {

    /**
     * Find all message
     * @return array
     */
    public function findAll() {
        return ['Test', 'Test', 'Kerstman'];
    }

    public function findAllByPerson(Person $person) {
        return ['Test'];
    }
}