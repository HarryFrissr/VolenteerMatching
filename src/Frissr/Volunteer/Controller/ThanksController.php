<?php
/**
 * Created by PhpStorm.
 * User: Maik
 * Date: 12/17/2015
 * Time: 18:46
 */

namespace Frissr\Volunteer\Controller;


class ThanksController
{
    public function indexAction() {
        // TODO Maak het path naar de Views eenvoudig beschikbaar
        // Would be cool if mail adress is gathered from database
        $mail = "voorbeeld@yahoo.com";
        include(__DIR__ . '/../../../../app/views/entity/thanks.html.php');
    }
}