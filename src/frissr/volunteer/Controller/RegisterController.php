<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 14-12-15
 * Time: 11:46
 */

namespace Frissr\Volenteer\Controller;

use Frissr\Volenteer\Entity\Person;
use DateTime;

class RegisterController {

    public function registerAction($name = null, $email = null, $accept) {

        // TODO Maak een Render functie aan.
        // TODO Maak gebruik van templates

        $person = new Person($name);
        // TODO Maak een property email aan
        // TODO Maak de property toegankelijk via een getter/setter
        $person->email = $email;

        include(__DIR__ . '/../../../../app/views/person/register.html.php');
    }

    public function handleRegisterAction($name, $email, $accept) {
        $person = new Person($name);
        $person->email = $email;

        // TODO Breng de gebruiker op de hoogte van zijn inschrijving
        // TODO Mail de beheerder dat er een inschrijving is
        // TODO Zet de inschrijving in de database
        $this->sendEmailToPerson($name, $email, $accept);


        include(__DIR__ . '/../../../../app/views/person/registerThankYou.html.php');
    }

    /**
     * @param $name
     * @param $email
     * @param $accept
     */
    private function sendEmailToPerson($name, $email, $accept)
    {
// TODO Zet tijdelijk weg in een tekst bestand
        // TODO Zet deze in een aparte klasse
        // TODO Haal het path op via een eenvoudige manier, zonder al die ./../../
        $handle = fopen(__DIR__ . '/../../../../data/register.txt', "a");
        $date = new DateTime('now');
        fwrite($handle, "{$date->getTimestamp()};{$name};{$email};{$accept}" . PHP_EOL);
        fclose($handle);
    }
} 