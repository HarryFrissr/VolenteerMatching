<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// TODO Maak hier de FrontController. De Frontcontroller heeft de volgende taken:
// TODO - Eenmalig de autoload aanroepen
// TODO - Alle verzoeken van de website gaan via de FrontController
// TODO - Handel af dat /index.php?<de_actie_in_de_controller_aanroept>
// TODO - Scheid de Controller en de User Interface
// TODO - Maak aparte Views aan en laad deze vanuit de app/views folder
// TODO - Geef de parameters door aan de Views
// TODO - Maak een default layou

require_once ('../vendor/autoload.php');
require_once ('../app/config/services.php');

use Frissr\Volunteer\Service\TranslationService;

$ww = new TranslationService();
echo $ww->getTranslation('We');
echo $ww->getTranslation('Appel');

die;
// TODO - Maak een default layout aan
require_once __DIR__ . './../vendor' . '/autoload.php';
echo "Welkom op de Matching website voor Vluchtelingen en Vrijwilligers in Nederland";

?>

<div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="faqArchive.php">FAQ Archive</a></li>
    </ul>
</div>

<div>
    <ul>
        <li><a href="list_last_refugees.php">The last 5 <?php echo $container->get("translation_service")->getTranslation('Refugees'); ?> </a></li>
        <li><a href="getRandomRefugees.php">Give random refugees</a></li>
    </ul>
</div>
