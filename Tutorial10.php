<?php

$isGreater = 5 > 10;
$isEqual = 5 == '5';
$isStrictEqual = 5 === '5';

$compareStrings = 'farhan' < 'Emran';
$compareStringsUpper = 'farhan' < 'Emran';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Booleans & Comparisons</title>
</head>
<body>
    <h2>Comparison Results</h2>
    <p>5 > 10: <?php echo $isGreater ? 'true' : 'false'; ?></p>
    <p>5 == '5' (Loose): <?php echo $isEqual ? 'true' : 'false'; ?></p>
    <p>5 === '5' (Strict): <?php echo $isStrictEqual ? 'true' : 'false'; ?></p>
    <p>'farhan' &lt; 'Emran': <?php echo $compareStrings ? 'true' : 'false'; ?></p>
</body>
</html>