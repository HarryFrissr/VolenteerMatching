<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 12/17/2015
 * Time: 7:16 PM
 */

namespace Frissr\Volunteer\Entity;


class InterestRepo
{
    public function findAll(){
        $football = new Interest("Football","Sport");
        $games = new Interest("Games","Entertainment");
        $running = new Interest("Running","Sport");

        return $list = [$football,$games,$running];
    }

    public function find(){
        return $football = new Interest("Football","Sport");

    }
}