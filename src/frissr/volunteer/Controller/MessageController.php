<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:45
 */

namespace Frissr\Volunteer\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use PDO;


class MessageController extends Controller
{
    public $activeChat;
    public $self;
    public $chatpartner;
    public $chatpartner_name;
    private $conn;
    public $var = 1;

    public function __construct($container) {

        parent::__construct($container);

        $db = $container->get('db');
        $this->conn = $db;

        $this->self = 1;
        $this->chatpartner = 2; //test
        $this->chatpartner_name = "Henk";

    }


    public function messageView()
    {
        $query = $this->conn->query("SELECT * FROM `messages` WHERE (sender='".$this->self."' AND receiver='".$this->chatpartner."') OR (sender='".$this->chatpartner."' AND receiver='".$this->self."');");
        $results = $query->fetchAll();


        echo $this->render('person/messages.html.php', array('results' => $results, 'self' => $this->self, 'chatpartner_name' => $this->chatpartner_name));
    }

    public function messagePost($content) {

//        $this->conn->query("INSERT INTO `messages` (`id`, `sender`, `receiver`, `time`, `content`) VALUES (NULL, '1', '2', CURRENT_TIMESTAMP, '". $content ."');");


        $query = $this->conn->prepare("INSERT INTO `messages` (`id`, `sender`, `receiver`, `time`, `content`) VALUES (NULL, '1', '2', CURRENT_TIMESTAMP, ?);");
        $query->bindValue(1, $content, PDO::PARAM_STR);
        $query->execute();

        // send msg to db
    }
}