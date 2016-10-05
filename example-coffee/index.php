<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bludit</title>
</head>
<body>
    <?php foreach ($posts as $Post): ?>

    <h1><?php echo $Post->title() ?></h1>
    <div><?php echo $Post->content() ?></div>

    <hr>

    <?php endforeach; ?>
</body>
</html>