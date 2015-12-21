<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 18-12-15
 * Time: 6:50
 */

namespace Frissr\Volunteer\Controller;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Templating\PhpEngine;

class Controller {

    /**
     * @var ContainerBuilder
     */
    protected $container;

    public function __construct(ContainerBuilder $container) {
        $this->container = $container;
    }

    /**
     * @param $name
     * @param array $parameters
     * @return string
     */
    public function render($name, array $parameters = array()) {
        return $this->get('templating')->render($name, $parameters);
    }

    /**
     * @return Session
     */
    public function getSession() {
        return $this->get('session');
    }

    /**
     * Give the option to call the service in the container
     *
     * @param $name
     * @return object
     */
    public function get($name) {
        return $this->container->get($name);
    }
} 