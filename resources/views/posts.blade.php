<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" />
    <title>Posts</title>
</head>

<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <?= $post ?>
    </article>
    <?php endforeach; ?>
</body>

</html>