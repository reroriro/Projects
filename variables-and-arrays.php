<?php
$name = 'Guest';
$name = 'Zaki';
$price = 5;

$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
$nutrition['fat'] = 36;
$nutrition['fiber'] = 2.1;

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans',];

$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Varibles</title>
        <link rel="stylesheet" href="css/styles.css">       
    </head>
    <body>
        <h1>Willy Wonka's Chocolate Factory</h1>
        <h2>Welcome <?php echo $name; ?></h2>
        <p>The cost of your candy is $<?php echo $price; ?> per pack.</p>
        <h2>Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
        <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
        <h2>Best Sellers</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
        </ul>
        <h2>Offers</h2>
        <p><?php echo $offers[0]['name']; ?> - 
          $<?php echo $offers[0]['price']; ?> </p>
        <p><?php echo $offers[1]['name']; ?> - 
          $<?php echo $offers[1]['price']; ?> </p>
        <p><?php echo $offers[2]['name']; ?> - 
          $<?php echo $offers[2]['price']; ?> </p>
    </body>
</html>