<?php

$name = 'Farhan';
$age = 20;
define('NAME', 'Iskandar');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Variables & Constants</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Constant Name: <?php echo NAME; ?></p>
</body>
</html>