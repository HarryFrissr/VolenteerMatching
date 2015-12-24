<?php $view->extend('index/default.html.php') ?>

<?php $view['slots']->start('body') ?>
    <h2>The index</h2>
    <p>You have reached the indexAction of the default IndexController
    <hr>
<?php $view['slots']->stop() ?>

<?php $view['slots']->start('debug') ?>
    <?php echo $debug ?>
<?php $view['slots']->stop() ?>



