<h2>Lijst van Interesse's</h2>

<ul>
    <?php if (count($list) == 0) : ?>
        <li>Niets gevonden</li>
    <?php endif ?>

    <?php foreach ($list as $item) : ?>
       <li><?php echo $item->getName() ?></li>
    <?php endforeach ?>
</ul>