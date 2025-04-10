<?php

$order = ['notebook', 'pencil', 'eraser', 'sharpener', 'ruler',];
sort($order);
$items = implode(', ', $order);

$classes = ['Patchwork' => 'April 12th', 'Sewing' => 'April 13th', 'Knitting' => 'April 14th'];
ksort($classes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Order</h1>
    <?= $items ?>
    <?php foreach ($classes as $description => $date) { ?>
<b><?= $description ?></b> <?= $date ?><br>
    <?php } ?>
    </body>
</html>