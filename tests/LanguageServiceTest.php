<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

//require_once('../vendor/autoload.php');
//require_once('../app/translation/messages.nl.yml');

/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 21-12-15
 * Time: 17:21
 */
use Frissr\Volunteer\Service\TranslationService;
use Faker\Factory;

class LanguageServiceTest extends PHPUnit_Framework_TestCase
{
    public function testiets(){
       // $this->assertTrue(false);

        $service = new TranslationService();
        $result = $service->getTranslation('We');
        $this->assertEquals('Wij', $result);

    }
}


