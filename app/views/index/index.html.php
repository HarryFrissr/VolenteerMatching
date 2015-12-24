<?php $view->extend('index/default.html.php') ?>

<?php $view['slots']->start('body') ?>

    <h2>The index</h2>
    <p>You have reached the indexAction of the default IndexController
    <hr>

    <?php if (isset($debug)) : ?>
        <?php echo $debug ?>
    <?php endif ?>

<?php $view['slots']->stop() ?>




