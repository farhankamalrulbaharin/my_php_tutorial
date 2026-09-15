<?php
$score = 50;

// Traditional if/else:
// if ($score > 40) { $val = 'High score!'; } else { $val = 'Low score!'; }

// Ternary Operator equivalent:
$val = $score > 40 ? 'High score!' : 'Low score!';

$userLoggedIn = true;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video #12 - Ternary Operators</title>
</head>
<body>
    <h2>Score Result</h2>
    <p>Status: <?php echo $val; ?></p>

    <h2>Inline HTML Usage</h2>
    <!-- Direct evaluation inside echo statement -->
    <p>User Status: <?php echo $userLoggedIn ? 'Welcome back, User!' : 'Please log in.'; ?></p>

    <!-- Dynamic CSS class application -->
    <p style="color: <?php echo $score > 40 ? 'green' : 'red'; ?>;">
        Your score is <?php echo $score; ?>.
    </p>
</body>
</html>