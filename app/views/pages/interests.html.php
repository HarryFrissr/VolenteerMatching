<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Matching: Interests</title>
</head>
<body>
<h2>Interesse pagina</h2>
<ul>
        <?php foreach ($list as $item) : ?>
            <li><?php echo $item->name ?></li>
        <?php endforeach ?>

</ul>
</body>
</html>