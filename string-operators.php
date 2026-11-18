<?php
$prefix = 'Thank you';
$name = 'Zaki';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>String Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2><?= $name ?>'s Order</h2>
        <p><?= $message ?></p>
    </body>
</html>