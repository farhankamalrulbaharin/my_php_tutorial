<?php
// Basic Function with parameters and default value
function sayHello($name = 'Guest', $time = 'day') {
    echo "Good $time, $name!<br>";
}

// Function with a return value
function formatProduct($product) {
    return "{$product['name']} costs ${$product['price']} to buy.<br>";
}

$formattedItem = formatProduct(['name' => 'Fire Flower', 'price' => 12]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video #13 - Functions</title>
</head>
<body>
    <h2>Function Calls</h2>
    <?php 
        sayHello('Farhan', 'morning');
        sayHello('Adib', 'night');
        sayHello(); // Uses default parameters ('Guest', 'day')
    ?>

    <h2>Formatted Function Output</h2>
    <p><?php echo $formattedItem; ?></p>
</body>
</html>