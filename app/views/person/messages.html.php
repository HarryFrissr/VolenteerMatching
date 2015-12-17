<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 17-12-2015
 * Time: 18:38
 */
?>
<h1>Messages</h1>

<form action="messages.php" method="post">

    <ul>
        <?php foreach ($list as $item) : ?>
            <li><?php echo $item ?></li>
        <?php endforeach ?>
    </ul>

    <div class="form-group">
        <input type="text" name="message_content" id="message_content" placeholder="Type here"> <button type="send" class="btn btn-default">Send</button>
    </div>

</form>
