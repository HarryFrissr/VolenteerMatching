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
    public function __construct($locale = 'nl')
    {
        $this->translator = new Translator($locale);
        $this->translator->setFallbackLocales(array('en'));
        $this->translator->setLocale($locale);
        $this->translator->addLoader('yaml', new YamlFileLoader());
        $this->translator->addResource('yaml', __DIR__ . '\..\..\..\..\app\translation\messages.nl.yml', 'nl');
        $this->translator->addResource('yaml', __DIR__ . '\..\..\..\..\app\translation\messages.fr.yml', 'fr');
        $this->translator->addResource('yaml', __DIR__ . '\..\..\..\..\app\translation\messages.en.yml', 'en');
    }

    public function getTranslation($word, array $parameters = array(), $domain = null, $locale = null)
    {
        return $this->translator->trans($word, $parameters, $domain, $locale);
    }
}



