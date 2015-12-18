<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 17-12-15
 * Time: 17:48
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\Foo;

class EntityController extends Controller {

    public function listAction() {
        $list = [new Foo('abc'), new Foo('def')];
        //get from DB

        // verwerk data

        return $this->render('entity/list.html.php', array('list' => $list));
    }

    public function indexAction() {
        $list = [];
        return $this->render('entity/list.html.php', array('list' => $list));
    }

    public function createAction() {
        return $this->render('entity/create.html.php');
    }

    public function readAction($id = 0) {
        $item = 'voorbeeld uit de controller';

        $item = strtoupper($item);

        return $this->render('entity/read.html.php', array('item' => $item));
    }

    public function updateAction($id = 0) {
        return $this->render('entity/update.html.php');
    }

    public function deleteAction($id = 0) {
        return $this->render('entity/delete.html.php');
    }
} 