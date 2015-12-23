<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 17-12-2015
 * Time: 18:45
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\Event;
class EventController
{

    public function indexAction(){
        $list  = [];

        $list[] = new Event("a");
        $list[] = new Event(2);
        $list[] = new Event(3);
        $list[] = new Event(4);
        $list[] = new Event(5);
        $list[] = new Event(6);
        include(__DIR__ . '/../../../../app/views/event/overview.html.php');
    }

    public function showAction(){
        // TODO functie toevoegen om eigenschappen event te laten zien op eventpagina
        $item = new Event('Christmas Helping','Help the refugees during the christmas festivities',20151216,'11:30',165,35, 'me','amsterdam');

        echo $item->getTitle() . '<br>';
        echo $item->getDescription() . '<br>';
        echo $item->getDate() . '<br>';
        echo $item->getTime() . '<br>';
        echo $item->getMaxNumberOfParticipants() . '<br>';
        echo $item->getNumberOfParticipants() . '<br>';
        echo $item->getOrganiser() . '<br>';
        echo $item->getLocation() . '<br>';


        }

}