<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 22-12-15
 * Time: 6:01
 */

namespace Frissr\Volunteer\Controller;


class IndexController extends Controller {

    public function indexAction() {
        $debug = $this->getDebugInfo();
        return $this->render('index/index.html.php', array('debug' => $debug));
    }

    /**
     * @return null|string
     */
    protected function getDebugInfo()
    {
        $debug = null;
        if ($this->container->getParameter('env') != 'prod') {
            $debug = $this->render('index/_debug.html.php',
                array(
                    'env' => $this->container->getParameter('env'),
                    'version' => $this->container->getParameter('version')
                )
            );
            return $debug;
        }
        return $debug;
    }
} 