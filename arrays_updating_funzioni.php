<?php

$order = ['notebook', 'pencil', 'eraser', 'sharpener', 'ruler',];
array_unshift($order, 'ebook');
array_pop($order);
$items = implode(', ',$order);


$classes =['Patchwork' => 'April 12th', 'Sewing' => 'April 13th', 'Knitting' => 'April 14th'];

array_shift($classes);
$new = ['Origami' => 'April 15th', 'Crochet' => 'April 16th'];
$classes = array_merge($classes, $new);
?>
<h1>Order</h1>
<?= $items ?>
<h1>Classes</h1>
<?php foreach($classes as $description =>$date) { ?>
    <p><?= $description ?>: <?= $date ?></p><br>
<?php } ?>    
