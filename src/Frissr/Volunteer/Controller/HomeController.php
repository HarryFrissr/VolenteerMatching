<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/17/2015
 * Time: 3:45 PM
 */

namespace Frissr\Volunteer\Controller;


class HomeController
{
    public function indexAction() {
        // TODO Maak het path naar de Views eenvoudig beschikbaar
        $title = "Volunteer Matching";
        $body = "<p>Test123</p>";
        return require (__DIR__ . '/../../../../app/views/pages/home2.html.php');
    }
}