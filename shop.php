<?php
require_once 'includes/data.php';
$page_title = 'Shop';

$wanted = 3;
$grand_total = 0;

require 'includes/header.php';
?>
        <h2><?= $name ?>'s Order (<?= $wanted ?> packs each)</h2>
        <table>
            <tr>
                <th>Candy</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Taste</th>
                <th>Subtotal</th>
            </tr>
            <?php foreach ($offers as $offer) { ?>
                <?php
                $subtotal = 0;

                if ($offer['stock'] == 0) {
                    $status = 'Sold out';
                } elseif ($offer['stock'] < $wanted * 5) {
                    $status = 'Low stock';
                    $subtotal = $offer['price'] * $wanted;
                } else {
                    $status = 'Available';
                    $subtotal = $offer['price'] * $wanted;
                }

                $taste = match ($offer['type']) {
                    'chewy' => 'Chewy and buttery',
                    'fresh' => 'Cool and minty',
                    'soft' => 'Soft and creamy',
                    default => 'Classic sweet',
                };

                $grand_total = $grand_total + $subtotal;
                ?>
                <tr>
                    <td><?= $offer['name'] ?></td>
                    <td>$<?= $offer['price'] ?></td>
                    <td><?= $offer['stock'] ?></td>
                    <td><?= $status ?></td>
                    <td><?= $taste ?></td>
                    <td>$<?= $subtotal ?></td>
                </tr>
            <?php } ?>
        </table>

        <p>Grand total: $<?= $grand_total ?></p>

        <?php
        switch (true) {
            case ($grand_total >= 40):
                $discount = 20;
                break;
            case ($grand_total >= 20):
                $discount = 10;
                break;
            default:
                $discount = 0;
        }
        $pay = $grand_total - ($grand_total / 100) * $discount;
        ?>
        <p>Discount: <?= $discount ?>%</p>
        <p>You pay: $<?= $pay ?></p>

        <h2>Restock Countdown (Chocolate)</h2>
        <?php $left = $offers[3]['stock']; ?>
        <?php while ($left > 0) { ?>
            <p>Only <?= $left ?> left!</p>
            <?php $left = $left - 4; ?>
        <?php } ?>
        <p>Chocolate is almost gone. Restocking soon.</p>
<?php require 'includes/footer.php'; ?>
