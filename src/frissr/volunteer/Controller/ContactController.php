<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:24
 */

namespace Frissr\Volenteer\Controller;

class ContactController {

    public function indexAction() {
        // TODO Maak het path naar de Views eenvoudig beschikbaar
        return file_get_contents(__DIR__ . '/../../../../app/views/pages/contact.html');
    }
} 