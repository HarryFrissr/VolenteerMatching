<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 12-12-15
 * Time: 11:37
 */

namespace Frissr\Volenteer\Controller;

class FaqController {
    public function indexAction() {
        // TODO Maak het path naar de Views eenvoudig beschikbaar
        $faqs = array('geen');
        include(__DIR__ . '/../../../../app/views/pages/faq.html.php');
    }

    public function archiveAction() {
        // TODO Maak het path naar de Views eenvoudig beschikbaar
        $faqs = array('Waarom staat deze er niet meer in?', 'Mijn FAQ is verwijderd', 'Ik kan geen FAQ toevoegen. Waarom niet?');
        include(__DIR__ . '/../../../../app/views/pages/faq.html.php');
    }
}