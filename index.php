<?php
require_once 'includes/data.php';
$page_title = 'Home';
require 'includes/header.php';
?>
        <?php if ($logged_in) { ?>
            <h2>Welcome back <?= $name ?></h2>
            <p><a href="shop.php" class="button">Go to your shop</a></p>
        <?php } else { ?>
            <h2>Welcome Guest</h2>
            <p><a href="#" class="button">Log in</a></p>
        <?php } ?>

        <h2>Best Sellers</h2>
        <ul>
            <?php foreach ($best_sellers as $candy) { ?>
                <li><?= $candy ?></li>
            <?php } ?>
        </ul>

        <h2>Module 2 Activities</h2>
        <p><a href="conditionals.php">Conditional statements</a> - if, if else, elseif, ternary, switch, match</p>
        <p><a href="loops.php">Loops</a> - while, do while, for, foreach</p>
        <p><a href="shop.php">Shop</a> - everything combined</p>
        <p><a href="include-demo.php">Include / Require</a> - include, include_once, require, require_once</p>
<?php require 'includes/footer.php'; ?>
