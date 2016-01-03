<?php $view->extend('index/default.html.php') ?>

    <?php $view['slots']->start('body') ?>
    <div>
        <ul>
        <?php foreach ($list as $item) : ?>
            <li><?php echo $item->name ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php $view['slots']->stop() ?>
