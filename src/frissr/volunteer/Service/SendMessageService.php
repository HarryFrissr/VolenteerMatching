<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 20:28
 */

namespace Frissr\Volunteer\Service;


class SendMessageService implements MessageServiceInterface {

    public function __construct() {

    }

    public function send($string) {
//TODO
        echo "SendMessageService";

        $this->sentThis();
    }

    private function sentThis() {

    }
} 