<?php
// NOTES - VIDEO #7: ASSOCIATIVE ARRAYS
// - Associative arrays use custom Key-Value pairs instead of numeric indices.
// - Syntax: 'key' => 'value'

$ninjaOne = [
    'Farhan' => 'black',
    'adam' => 'orange',
    'rith'  => 'pink'
];

// Accessing values using keys
$marioBelt = $ninjaOne['Farhan'];

// Adding a new key-value pair
$ninjaOne['fathil'] = 'green';

// Overwriting an existing value
$ninjaOne['Farhan'] = 'red';

// Count items in array
$totalCount = count($ninjaOne);

// Merging two associative arrays
$ninjaTwo = ['Emran' => 'yellow', 'wan' => 'white'];
$allNinjas = array_merge($ninjaOne, $ninjaTwo);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Associative Arrays</title>
</head>
<body>
    <h2>Associative Array Demo</h2>
    <p>Farhan's Belt Color: <?php echo $marioBelt; ?></p>
    <p>Total Ninjas Count: <?php echo $totalCount; ?></p>
    <p>Merged Array Output:</p>
    <pre><?php print_r($allNinjas); ?></pre>
</body>
</html>