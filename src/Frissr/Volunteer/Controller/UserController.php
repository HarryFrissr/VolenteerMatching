<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 21-12-15
 * Time: 14:35
 */

namespace Frissr\Volunteer\Controller;


class UserController extends Controller {

    public function indexAction() {
        $query = 'select * from users where id > 1';

        $stmt = $this->get('db')->query($query);

        echo '<h2>Alle gebruikers</h2>';
        while ($row = $stmt->fetch()) {
            echo $row['id'] . ' - ' . $row['name'] . '<br>';
        }
    }
} 