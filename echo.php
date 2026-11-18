<?php
$name = 'Zaki';
$favorites = ['Chocolate', 'Toffee', 'Fudge',];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Echo Shorthand</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Welcome <?= $name ?></h2>
        <p>Your favorite type of candy is: <?= $favorites[0] ?>.</p>
    </body>
</html>