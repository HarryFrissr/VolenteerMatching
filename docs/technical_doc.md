------
Config
------

Place config files in app/config

-------
PHPUnit
-------

Test the application

- vendor\bin\phpunit tests

-------------
Errors
-------------

I get the error:
- Fatal error: Class 'Frissr\Volenteer\Service\FixedRefugeeService' not found in D:\web\Frissr\VolenteerMatching\web\getRandomRefugees.php on line 13

When the class won't get loaded with autoload
- require_once __DIR__ . './../vendor' . '/autoload.php';

The new classes are not in the Composer autoload file
- Run composer dumpautoload -o


