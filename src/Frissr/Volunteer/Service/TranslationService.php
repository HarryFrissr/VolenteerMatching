<?php namespace Frissr\Volunteer\Service;
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 20-12-15
 * Time: 17:17
 */

//require_once('../../../../vendor/autoload.php');

use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\Translation\Translator;

class TranslationService
{
    public $translator;

    /**
     * TranslationService constructor.
     */
    public function __construct()
    {
        $this->translator = new Translator('nl_NL');
        //$this->translator->setFallbackLocales(array('en'));
        $this->translator->addLoader('yaml', new YamlFileLoader());
        $this->translator->addResource('yaml','../../../../app/translation/messages.nl.yml', 'en_EN');
        $this->translator->addResource('yaml','../../../../app/translation/messages.nl.yml', 'nl_NL');
    }
    public function getTranslation($word)
    {
        return $this->translator->trans($word);
    }
}

//$ww = new TranslationService();
//echo $ww->getTranslation('We');





