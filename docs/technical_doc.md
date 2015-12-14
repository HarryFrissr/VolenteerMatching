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

Volunter is hernoemd

Ik kijg de melding:
- Fatal error: Class 'Frissr\Volenteer\Service\FixedRefugeeService' not found in D:\web\Frissr\VolenteerMatching\web\getRandomRefugees.php on line 13

Wordt de klasse ingeladen mbv de autoload
- require_once __DIR__ . './../vendor' . '/autoload.php';

De nieuwe klasses staan nog niet in de Cpmposer autoload file.
- Run composer dumpautoload -o

De autoload werkt nog niet naar behoren.

