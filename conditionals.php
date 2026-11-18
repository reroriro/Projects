<?php
require_once 'includes/data.php';
$page_title = 'Conditional Statements';

$stock = 10;
$wanted = 8;
$grade = 85;
$order = 'fries';
$size = 'M';
$cold = true;

$login_text = $logged_in ? 'Log out' : 'Log in';

$can_buy = ($wanted <= $stock);

if ($grade >= 90) {
    $remark = 'Excellent! You got an A.';
} elseif ($grade >= 75) {
    $remark = 'Good job! You passed.';
} else {
    $remark = 'Sorry, you failed. Try harder next time.';
}

switch ($order) {
    case 'burger':
        $meal = 'You get a burger.';
        break;
    case 'fries':
        $meal = 'You get fries.';
        break;
    case 'soda':
        $meal = 'You get a soda.';
        break;
    default:
        $meal = 'Error: unknown order.';
}

$bag = match ($size) {
    'S' => 'Small bag (5 candies)',
    'M' => 'Medium bag (10 candies)',
    'L' => 'Large bag (20 candies)',
    default => 'Unknown bag size',
};

require 'includes/header.php';
?>
        <h2>1. Ternary Operator</h2>
        <p>Account link: <?= $login_text ?></p>

        <h2>2. if Statement</h2>
        <?php if ($can_buy) { ?>
            <p>Stock: <?= $stock ?> | Wanted: <?= $wanted ?> - You can buy this chocolate.</p>
        <?php } ?>

        <h2>3. if else Statement</h2>
        <?php if ($cold) { ?>
            <p>It is cold, so enjoy a hot chocolate.</p>
        <?php } else { ?>
            <p>It is warm, so enjoy an ice cream.</p>
        <?php } ?>

        <h2>4. if elseif else Statement</h2>
        <p>Grade: <?= $grade ?> - <?= $remark ?></p>

        <h2>5. switch Statement</h2>
        <p>Order: <?= $order ?> - <?= $meal ?></p>

        <h2>6. match Expression</h2>
        <p>Size <?= $size ?>: <?= $bag ?></p>
<?php require 'includes/footer.php'; ?>
