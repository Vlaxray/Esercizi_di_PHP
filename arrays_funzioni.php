<?php

$greetings = ['ciao', 'hello', 'hola', 'bonjour', 'hallo'];
$greetings_key = array_rand($greetings);
$greeting = $greetings[$greetings_key];

$bestsellers = ['books', 'shoes', 'pencils', 'clothes', 'toys','toys'];
$bestsellers_count = count($bestsellers);
$bestsellers_text = implode(', ', $bestsellers);

$customer = ['forename' => 'Ivy','surname'=> 'Gates','email'=> 'ivy@asd.tik',];

if (array_key_exists('forename', $customer)) {
    $greeting .= $customer['forename'];
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
    <h1>Bestsellers</h1>
    <p><?= $greeting ?></p>
    <p>Our top <?= $bestsellers_count ?> items today are:
    <b><?= $bestsellers_text ?></b></p>
</body>
</html>