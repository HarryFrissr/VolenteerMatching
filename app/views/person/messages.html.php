<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:38
 */


?>
<h1>Messages</h1>

<form action="messages.php?chatid=<?php echo $chatpartner->getId() ?>" method="post">
    <h3>Available chats</h3>
        <?php foreach ($userlist as $user): ?>
            <li><a href="?chatid=<?php echo $user['id'] ?>"><?php echo $user['name'] ?></a></li>
        <?php endforeach ?>


    <h3>Chat with: <?php echo $chatpartner->getName(); ?></h3>
    <ul>
        <?php foreach ($chatcontent as $message): ?>
            <li><?php echo (($message['sender'] == $self->getId()) ? "you: " : $chatpartner->getName() . ": "). $message['content'] ?></li>
        <?php endforeach ?>
    </ul>

    <div class="form-group">
        <input type="text" name="message_content" id="message_content" placeholder="Type here"> <button type="send" class="btn btn-default">Send</button>
    </div>

</form>