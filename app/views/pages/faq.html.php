<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>FAQ</h2>
<p>
    <ul>
        <?php if (count($faqs) == 0) : ?>
            <li>Geen FAQ gevonden</li>
        <?php endif ?>

        <?php foreach ($faqs as $faq) : ?>
            <li>
                <?php echo $faq ?>
            </li>
        <?php endforeach ?>
    </ul>
</p>
</body>
</html>