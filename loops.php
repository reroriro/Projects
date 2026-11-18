<?php
require_once 'includes/data.php';
$page_title = 'Loops';
$cost = $offers[0]['price'];
require 'includes/header.php';
?>
        <h2>1. while Loop</h2>
        <?php $counter = 1; ?>
        <?php while ($counter < 6) { ?>
            <p>Packing box number <?= $counter ?></p>
            <?php $counter++; ?>
        <?php } ?>

        <h2>2. do while Loop</h2>
        <?php $turn = 10; ?>
        <?php do { ?>
            <p>This always runs once, even though the condition is false (turn <?= $turn ?>).</p>
            <?php $turn++; ?>
        <?php } while ($turn < 5); ?>

        <h2>3. for Loop (price table)</h2>
        <table>
            <tr>
                <th>Packs</th>
                <th>Total cost</th>
            </tr>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>$<?= $i * $cost ?></td>
                </tr>
            <?php } ?>
        </table>

        <h2>4. foreach Loop (values only)</h2>
        <ul>
            <?php foreach ($best_sellers as $candy) { ?>
                <li><?= $candy ?></li>
            <?php } ?>
        </ul>

        <h2>5. foreach Loop (keys and values)</h2>
        <?php foreach ($nutrition as $key => $value) { ?>
            <p><?= $key ?>: <?= $value ?>%</p>
        <?php } ?>
<?php require 'includes/footer.php'; ?>
