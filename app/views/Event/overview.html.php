<h2>Event Page</h2>

<?php if (count($list) == 0) {
    echo "niks gevonden";
} ?>
<ul>
    <?php foreach ($list as $item) : ?>
        <li><?php echo $item->getTitle() ?></li>
    <?php endforeach ?>
</ul>

