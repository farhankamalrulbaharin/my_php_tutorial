<?php

$ninjas = ['Raizo', 'Naruto', 'Shinobu'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video #15 - Include & Require</title>
</head>
<body>
    <h2>Include vs Require Demo</h2>
    <p>Using include and require allows splitting UI modularly (e.g. headers and footers).</p>

    <h3>Ninja Roster</h3>
    <ul>
        <?php foreach ($ninjas as $ninja) { ?>
            <li><?php echo $ninja; ?></li>
        <?php } ?>
    </ul>
</body>
</html>