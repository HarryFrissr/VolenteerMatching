<?php
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 16-12-15
 * Time: 11:08
 */

namespace Frissr\Volunteer\Controller;

include(__DIR__ . '/../../../../app/views/person/login.html.php');

class LoginContoller
{

    public function loginAction()
    {
        // TODO: render the login.php.html page

    }

    public function handleLoginAction($name, $password)
    {

        // TODO need validate the name and password field (check if empty or not and no strange symbols which could lead to an attack
        // TODO need to check if password and name belong together
        // TODO: Need to display that password and/or name are incorrect or render the personal page
    }

    public function forgotPassword($name)
    {
        $person = new Person($name);
        //TODO: handle this by calling the sendLoginEmail function
        //TODO: Show the person on the website that an email is send.
        $this->sendLoginEmail($name);
    }

    private function sendLoginEmail($name)
    {

        //TODO: need to email password to the person who want to login, need to get its email from database
        //TODO: set up the email with PHPMailer (?!) or just email() function of php

    }

}