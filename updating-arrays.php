<?php
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
$nutrition['fat'] = 36;
$nutrition['fiber'] = 2.1;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Varibles</title>
        <link rel="stylesheet" href="css/styles.css">       
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
        <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
    </body>
</html>