<?php
$ninjas = ['farhan', 'Naruto', 'Raizo'];

$firstNinja = $ninjas[0];

$ninjas[1] = 'Shinobu';

$ninjas[] = 'Momo';
array_push($ninjas, 'Sasuke');

$popped = array_pop($ninjas);

$totalNinjas = count($ninjas);

?>

<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>
    <h2>Indexed Array Demo</h2>
    <p>First Ninja: <?php echo $firstNinja; ?></p>
    <p>Total Ninjas: <?php echo $totalNinjas; ?></p>
    <p>Array Structure (Raw):</p>
    <pre><?php print_r($ninjas); ?></pre>
</body>
</html>