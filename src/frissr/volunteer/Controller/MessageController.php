<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:45
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\Person;
use Symfony\Component\HttpFoundation\Session\Session;
use PDO;


class MessageController extends Controller
{
    private $activeChat;
    private $self;
    private $chatpartner;
    private $conn;

    public function __construct($container, $activeChatId) {

        parent::__construct($container);

        $db = $container->get('db');
        $this->conn = $db;

        // TODO, fetch self from the session
        $this->self = new Person("Sam", "Ansmink");
        $this->self->setId(1);

        // Currently active chat, get the corresponding user TODO: FIX THIS HORRIBLE INJECTON LEAK
        $query1 =  $this->conn->query("SELECT * FROM `users` WHERE id=".$activeChatId.";");
        $person = $query1->fetch();
        $this->chatpartner = Person::loadFromArray($person);
    }


    public function renderView()
    {
        // Get the list of messages in the active conversation TODO: PREPARED STATEMENTS?
        $query1 = $this->conn->query("SELECT * FROM `messages`
                                     WHERE (sender='".$this->self->getId()."' AND receiver='".$this->chatpartner->getId()."') OR
                                           (sender='".$this->chatpartner->getId()."' AND receiver='".$this->self->getId()."');" );
        $chatcontent = $query1->fetchAll();

        //Get a list from all the users that are chatting with you TODO: PREPARED STATEMENTS?
        $query2 = $this->conn->query("  SELECT * from users WHERE
                                      (id IN (SELECT sender FROM messages WHERE receiver = ". $this->self->getId() .")) OR
                                      (id IN (SELECT receiver FROM messages WHERE sender = ". $this->self->getId() ."));   ");

        $userlist = $query2->fetchAll();

        $render_params = array('chatcontent'        => $chatcontent,
                               'self'               => $this->self,
                               'userlist'           => $userlist,
                               'chatpartner'        => $this->chatpartner);

        echo $this->render('person/messages.html.php', $render_params);
    }

    public function messagePost($content) {

        $query = $this->conn->prepare("INSERT INTO `messages` (`id`, `sender`, `receiver`, `time`, `content`) VALUES (NULL, '1', '2', CURRENT_TIMESTAMP, ?);");
        $query->bindValue(1, $content, PDO::PARAM_STR);
        $query->execute();

        // send msg to db
    }
}