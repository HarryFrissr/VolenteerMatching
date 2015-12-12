<?php
// TODO Maak hier de FrontController. De Frontcontroller heeft de volgende taken:
// TODO - Eenmalig de autoload aanroepen
// TODO - Alle verzoeken van de website gaan via de FrontController
// TODO - Handel af dat /index.php?<de_actie_in_de_controller_aanroept>
// TODO - Scheid de Controller en de User Interface
// TODO - Maak aparte Views aan en laad deze vanuit de app/views folder
// TODO - Geef de parameters door aan de Views
// TODO - Maak een default layout aan

// TODO Weer een andere locatie voor de autoload. Maak een FrontController
// TODO Zorg voor inlog en uitlog mogelijkheden
// TODO Paswoord vergeten
require_once __DIR__ . './../../vendor' . '/autoload.php';

echo "Welkom op de Beheer applicatie";

?>

<div class="nav">
    <ul>
        <li><a href="#">Login</a></li>
        <li><a href="#">Logout</a></li>
        <li><a href="#">Beheer</a></li>
        <li><a href="#">Instellingen</a></li>
    </ul>
</div>


