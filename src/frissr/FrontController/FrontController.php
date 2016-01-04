<?php

namespace Frissr\FrontController;

use ReflectionClass;
use InvalidArgumentException;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FrontController implements FrontControllerInterface
{
    /**
     * @var ContainerBuilder
     */
    protected $container;

    const DEFAULT_CONTROLLER = "IndexController";
    const DEFAULT_ACTION     = "index";
    
    protected $controller    = self::DEFAULT_CONTROLLER;
    protected $action        = self::DEFAULT_ACTION;
    protected $params        = array();

    public function __construct(ContainerBuilder $container) {
        $this->container = $container;
        $this->parseUri();
    }
    
    protected function parseUri() {
        reset($_GET);
        $stack = explode('/', key($_GET));
        $controller = array_shift($stack);
        $controller = (!empty($controller) ? strtolower($controller) : 'index') . 'Controller';
        $action = array_shift($stack);
        $action = (!empty($action) ? strtolower($action) : 'index') . 'Action' ;
        $params = $stack;

        if (isset($controller)) {
            $this->setController($controller);
        }
        if (isset($action)) {
            $this->setAction($action);
        }
        if (isset($params)) {
            $this->setParams($stack);
        }
    }
    
    public function setController($controller) {
        $controller = ucfirst(strtolower($controller)) . "Controller";
        if (!class_exists($controller)) {
            // TODO Geef een nettere foutmelding - of van af in de front end
            throw new InvalidArgumentException(
                "The action controller '$controller' has not been defined.");
        }
        $this->controller = $controller;
        return $this;
    }
    
    public function setAction($action) {
        $reflector = new ReflectionClass($this->controller);
        if (!$reflector->hasMethod($action)) {
            // TODO Geef een nettere foutmelding
            throw new InvalidArgumentException(
                "The controller action '$action' has been not defined.");
        }
        $this->action = $action;
        return $this;
    }
    
    public function setParams(array $params) {
        $this->params = $params;
        return $this;
    }
    
    public function run() {
        return call_user_func_array(array(new $this->controller($this->container), $this->action), $this->params);
    }
}