<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 1/1/2016
 * Time: 6:26 PM
 */

namespace Frissr\Volunteer\Controller;


class InterestTestController extends Controller
{

    public function indexAction() {
        $interest_service=$this->get('register_interest_service');
        $interest_service->addInterest('Hockey', 'Sport', 'Play Hockey for strong legs.');
        }
}