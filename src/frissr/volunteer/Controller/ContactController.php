<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 12-12-15
 * Time: 11:24
 */

namespace Frissr\Volunteer\Controller;

class ContactController extends Controller {

    public function indexAction() {
        return $this->render('pages/contact.html');
    }
}