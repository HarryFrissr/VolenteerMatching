<?php

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
        $this->assertTrue(false);

        $service = new TranslationService();
        $this->assertEquals('We', 'We');
    }
}
