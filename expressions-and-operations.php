<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
$prefix = 'Thank you';
$name = 'Zaki';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Arithmetic Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Shopping Cart</h2>
        <h2><?= $name ?>'s Order</h2>
        <p>Items: <?= $items ?></p>
        <p>Cost per pack: $<?= $cost ?></p>
        <p>Subtotal: $<?= $subtotal ?></p>
        <p>Tax: $<?= $tax ?></p>
        <p>Total: $<?= $total ?></p>
        <p><?= $message ?></p>
    </body>
</html>