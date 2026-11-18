<?php
require_once 'includes/data.php';
require_once 'includes/data.php';
$page_title = 'Include and Require';
require 'includes/header.php';
?>
        <h2>include</h2>
        <p>If the file is missing, PHP shows a warning but keeps running the page.</p>
        <?php include 'includes/promo.php'; ?>

        <h2>include_once</h2>
        <p>The promo file is requested twice, but it only appears once:</p>
        <?php include_once 'includes/promo.php'; ?>
        <?php include_once 'includes/promo.php'; ?>

        <h2>require / require_once</h2>
        <p>If a required file is missing, PHP stops with an error. That is why header.php, footer.php and data.php use require.</p>
        <p>Data loaded with require_once: welcome <?= $name ?>, we have <?= $offers[0]['name'] ?> on offer.</p>
<?php require 'includes/footer.php'; ?>
