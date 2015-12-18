<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:45
 */

namespace Frissr\Volunteer\Controller;

use Symfony\Component\HttpFoundation\Session\Session;


class MessageController
{
    public $activeChat;
    public $list = ["hi","ha","ho"];

    public function __construct() {
        $this->session = new Session();
        $this->session->start();
    }


    public function messageView() {
        $list = $this->list;

        include(__DIR__ . '/../../../../app/views/person/messages.html.php');
    }

    public function messagePost($content) {
        array_push($this->list, $content);
    }


}