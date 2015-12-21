<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:38
 */
?>
<h1>Message with <?php echo $chatpartner_name; ?></h1>

<form action="messages.php" method="post">

    <ul>
        <?php foreach ($results as $result): ?>
            <li><?php echo (($result['sender'] == $self) ? "you: " : $chatpartner_name . ": "). $result['content'] ?></li>
        <?php endforeach ?>
    </ul>

    <div class="form-group">
        <input type="text" name="message_content" id="message_content" placeholder="Type here"> <button type="send" class="btn btn-default">Send</button>
    </div>

</form>