------
Config
------

Place config files in app/config

-------
PHPUnit
-------

Test de applicatie.

- vendor\bin\phpunit tests

-------------
Foutmeldingen
-------------

Ik kijg de melding:
- Fatal error: Class 'Frissr\Volunteer\Service\FixedRefugeeService' not found in D:\web\Frissr\VolunteerMatching\web\getRandomRefugees.php on line 13

Wordt de klasse ingeladen mbv de autoload
- require_once __DIR__ . './../vendor' . '/autoload.php';

De nieuwe klasses staan nog niet in de Cpmposer autoload file.
- Run composer dumpautoload -o

- Start webserver met de volgende command:
    php -S localhost:8080



