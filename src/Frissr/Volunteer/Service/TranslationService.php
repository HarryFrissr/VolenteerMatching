<?php namespace Frissr\Volunteer\Service;
/**
 * Created by PhpStorm.
 * User: Hiltje
 * Date: 20-12-15
 * Time: 17:17
 */

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
        //$this->translator->setFallbackLocales(array('nl'));
        $this->translator->addLoader('yaml', new YamlFileLoader());
        $this->translator->addResource('yaml','../../../../app/translation/messages.nl.yml', 'nl_NL');

    }
    public function getTranslation($word)
    {
        return $this->translator->trans($word);
    }
}



