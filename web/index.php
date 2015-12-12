<?php
// TODO Maak hier de FrontController. De Frontcontroller heeft de volgende taken:
// TODO - Eenmalig de autoload aanroepen
// TODO - Alle verzoeken van de website gaan via de FrontController
// TODO - Handel af dat /index.php?<de_actie_in_de_controller_aanroept>
// TODO - Scheid de Controller en de User Interface
// TODO - Maak aparte Views aan en laad deze vanuit de app/views folder
// TODO - Geef de parameters door aan de Views
// TODO - Maak een default layout aan

require_once __DIR__ . './../vendor' . '/autoload.php';

echo "Welkom op de Matching website voor Vluchtelingen en Vrijwilligers in Nederland";

?>

<div>
    <ul>
        <li><a href="list_last_refugees.php">Laaste 5 vluchtelingen</a></li>
    </ul>
</div>


