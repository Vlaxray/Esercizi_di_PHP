<?php 
declare(strict_types = 1);
$candy = [
    'toffe' => ['price' => 1 , 'stock' => 12],
    'coffe' => ['price' => 5 , 'stock' => 2],
    'poffe' => ['price' => 6.00 , 'stock' => 5],
    'affettato' => ['price' => 3 , 'stock' => 6],
    ];
$tax = 20; // 20% di tasse

function get_reorder_message(int $stock): string 
{
    return ($stock < 5) ? 'yes' : 'no'; 
}

function get_total_value(float $price, int $quantity): float 
{
    return $price * $quantity; 
}

function get_tax_due(float $price, int $quantity, int $tax =0): float 
{
    return ($price * $quantity) * ($tax / 100); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>the candy store</h1>
    <h2>stock control</h2>
    <table>
        <tr>
            <th>candy</th><th>stock</th><th>Re-order</th><th>Total value</th><th>tax due</th>
        </tr>
        <?php foreach ($candy as $product_name => $data) { ?>
        <tr>
            <td><?= $product_name; ?></td>
            <td><?= $data['stock']; ?></td>
            <td><?= get_reorder_message($data['stock']); ?></td>
            <td><?= get_total_value($data['price'], $data['stock']); ?></td>
            <td><?= get_tax_due($data['price'], $data['stock'], $tax); ?></td>}
    <?php } ?>
    </table>
    </body>
</html>