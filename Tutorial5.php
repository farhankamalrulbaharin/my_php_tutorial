<?php
$radius = 24;
$pi = 3.14;

$area = $pi * $radius ** 2;

$views = 10;
$views++;
$views--;

$score = 50;
$score += 20;

$floorValue = floor($pi);
$ceilValue = ceil($pi);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Numbers & Math</title>
</head>
<body>
    <h2>Math Calculations</h2>
    <p>Area of circle: <?php echo $area; ?></p>
    <p>Total Score: <?php echo $score; ?></p>
    <p>Floored Pi: <?php echo $floorValue; ?></p>
    <p>Ceiled Pi: <?php echo $ceilValue; ?></p>
</body>
</html>