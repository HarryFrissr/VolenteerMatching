<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 14-12-15
 * Time: 11:46
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\Person;
use DateTime;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller {

    /**
     * @param null $name
     * @param null $email
     * @param $accept
     * @return string
     */
    public function registerAction($name = null, $email = null, $accept) {
        // Data ophalen
        $person = new Person($name);
        $person->setEmail($email);

        // Verwerk data

        // Render de data
        return $this->render('person/register.html.php', array('person' => $person));
    }

    /**
     * @param $name
     * @param $email
     * @param $accept
     * @return string
     */
    public function handleRegisterAction($name, $email, $accept) {
        // Data ophalen
        $person = new Person($name);
        $person->setEmail($email);

        // TODO Breng de gebruiker op de hoogte van zijn inschrijving
        // TODO Mail de beheerder dat er een inschrijving is
        // Verwerk data
        $this->sendRegisterRequestToDatabase($name, $email, $accept);
        $this->sendEmailToPerson($name, $email, $accept);


        // Render de data
        return $this->render('person/registerThankYou.html.php', array('person' => $person));
    }

    private function sendRegisterRequestToDatabase($name, $email, $accept)
    {
        // TODO Zet de inschrijving in de database

        $this->getSession()->getFlashBag()->add('notice', 'Register request set to the database.');
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

        $this->getSession()->getFlashBag()->add('notice', 'Mail send to person.');
    }
}
