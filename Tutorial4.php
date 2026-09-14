<?php


$stringOne = 'my email is ';
$stringTwo = 'paan123@gmail.com';


$fullString = $stringOne . $stringTwo;


$name = 'adam';
$greeting = "Hello, my name is $name";


$email = 'paan123@gmail.com';
$length = strlen($email);
$upper = strtoupper($name);
$replaced = str_replace('m', 'w', $name);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Strings</title>
</head>
<body>
    <h2>String Operations</h2>
    <p>Concatenation: <?php echo $fullString; ?></p>
    <p>Interpolation: <?php echo $greeting; ?></p>
    <p>Length of email: <?php echo $length; ?></p>
    <p>Uppercase Name: <?php echo $upper; ?></p>
    <p>Replaced Name: <?php echo $replaced; ?></p>
</body>
</html>