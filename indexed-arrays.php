<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans',];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Varibles</title>
        <link rel="stylesheet" href="css/styles.css">       
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Best Sellers</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
        </ul>
    </body>
</html>