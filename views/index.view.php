<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Home Page</title>
    <h1>Home Page</h1>


    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</body>
</html>