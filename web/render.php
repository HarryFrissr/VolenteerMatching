<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/17/2015
 * Time: 3:44 PM
 */

require_once __DIR__ . './../vendor' . '/autoload.php';
require_once __DIR__ . './../app/config' . '/services.php';

$templating = $container->get('templating');
echo $templating->render('pages\faq.html.php', array('faqs' => ['test', 'sample']));