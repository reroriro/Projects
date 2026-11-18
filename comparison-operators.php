<?php
$item = 'Chocolate';
$stock = '10';
$wanted = '8';
$can_buy = ($wanted <= $stock);
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Comparison Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Shopping Cart</h2>
        <p>Item: <?= $item ?></p>
        <p>Stock: <?= $stock ?></p>
        <p>Wanted: <?= $wanted ?></p>
        <p>Can buy: <?= $can_buy ?></p>
    </body>
</html>