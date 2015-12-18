<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 17:48
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\InterestRepo as InterestRepo;

class InterestController {

    public function listAction() {
        $finder = new InterestRepo();
        $list=$finder->findAll();


        //get from DB

        // verwerk data

        include(__DIR__ . '/../../../../app/views/pages/interests.html.php');
    }

    public function indexAction() {
        include(__DIR__ . '/../../../../app/views/entity/list.html.php');
    }

    public function createAction() {
        include(__DIR__ . '/../../../../app/views/entity/create.html.php');
    }

    public function readAction($id = 0) {
        $item = 'voorbeeld uit de controller';

        $item = strtoupper($item);

        include(__DIR__ . '/../../../../app/views/entity/read.html.php');
    }

    public function updateAction($id = 0) {
        include(__DIR__ . '/../../../../app/views/entity/update.html.php');
    }

    public function deleteAction($id = 0) {
        include(__DIR__ . '/../../../../app/views/entity/delete.html.php');
    }
} 