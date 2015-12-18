<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 18-12-15
 * Time: 8:04
 */

namespace Frissr\Volunteer\Controller;

class ConnectionController extends Controller{

    public function viewDetailsAction() {
        var_dump($this->get('db'));
    }
} 