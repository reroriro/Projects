<?php
$name = 'Guest';
$name = 'Zaki';
$chocolate = 100;
$toffee = 50;
$fudge = 20;
$stock = 0 + '100chocolate' + '50toffee' + '20fudge';
$count = 60;
$wanted =  50;
$can_buy = ($wanted <= $stock);
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Type Juggling</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Welcome <?php echo $name; ?></h2>
        <h2>Candies on stock</h2>
        <ul>
            <li>Chocolate <?= $chocolate ?></li>
            <li>Toffee <?= $toffee ?></li>
            <li>Fudge <?= $chocolate ?></li>
        </ul>
        <p>Total Stock: <?= $stock ?></p>
        <h2>Shopping Cart</h2>
        <p>Stock: <?= $stock ?></p>
        <p>Ordered: <?= $wanted ?></p>
        <p>Can buy: <?= $can_buy ?></p>
    </body>
</html>