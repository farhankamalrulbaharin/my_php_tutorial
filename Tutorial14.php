<?php
$name = 'Mario'; // Global Variable

function myFunc() {
    $price = 10; // Local Variable
    echo "Inside function, price is: $price<br>";
}

myFunc();
// echo $price; // Error! $price is not defined in the global scope.

// Accessing global variables inside a function
function sayBye() {
    global $name; // Pulling $name from the global scope
    $name = 'Emran'; // Modifying the global variable directly
    echo "Bye, $name!<br>";
}

sayBye();

// Passing by reference (&$name)
function uppercaseName(&$name) {
    $name = strtoupper($name);
}

uppercaseName($name);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video #14 - Variable Scope</title>
</head>
<body>
    <h2>Variable Scope Summary</h2>
    <p>Modified Global Name: <?php echo $name; ?></p>
</body>
</html>