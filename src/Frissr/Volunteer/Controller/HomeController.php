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
        return file_get_contents(__DIR__ . '/../../../../app/views/pages/home2.html');
    }
}