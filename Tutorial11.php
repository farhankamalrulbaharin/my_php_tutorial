<?php
$price = 20;

// Simple If-Else structure
if ($price < 10) {
    $discount = 'Cheap item!';
} elseif ($price >= 10 && $price <= 30) {
    $discount = 'Moderately priced item.';
} else {
    $discount = 'Expensive item!';
}

// Example iterating over an array with conditions inside
$products = [
    ['name' => 'Diamond', 'price' => 20],
    ['name' => 'Iron ore', 'price' => 10],
    ['name' => 'Gold', 'price' => 15],
    ['name' => 'Netherite', 'price' => 50]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video #11 - Conditional Statements</title>
</head>
<body>
    <h2>Price Check</h2>
    <p>Price status: <?php echo $discount; ?></p>

    <h2>Product Inventory (Filtering Items)</h2>
    <ul>
        <?php foreach ($products as $product) { ?>
            <?php if ($product['price'] > 15) { ?>
                <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?> (Premium Item)</li>
            <?php } else { ?>
                <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>