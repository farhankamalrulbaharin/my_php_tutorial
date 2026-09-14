<?php
$ninjas = ['Peter', 'Raizo', 'Shiobu'];

$blogs = [
    ['title' => 'Wan Airul Party Chaos', 'author' => 'Farhan', 'likes' => 30],
    ['title' => 'Adam Shopping Kart', 'author' => 'Amsyar', 'likes' => 25],
    ['title' => 'Fathil Chest Investigation', 'author' => 'Adib', 'likes' => 50]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Loops in PHP</title>
</head>
<body>
    <h2>1. For Loop</h2>
    <?php for ($i = 0; $i < count($ninjas); $i++) { ?>
        <p><?php echo $ninjas[$i]; ?></p>
    <?php } ?>

    <h2>2. Foreach Loop (Array)</h2>
    <ul>
        <?php foreach ($ninjas as $ninja) { ?>
            <li><?php echo $ninja; ?></li>
        <?php } ?>
    </ul>

    <h2>3. Foreach Loop (Multidimensional Array)</h2>
    <?php foreach ($blogs as $blog) { ?>
        <h3><?php echo $blog['title']; ?></h3>
        <p>Written by: <?php echo $blog['author']; ?></p>
        <p>Likes: <?php echo $blog['likes']; ?></p>
        <hr>
    <?php } ?>

    <h2>4. While Loop</h2>
    <?php 
    $i = 0;
    while ($i < count($ninjas)) {
        echo '<p>Ninja: ' . $ninjas[$i] . '</p>';
        $i++;
    }
    ?>
</body>
</html>