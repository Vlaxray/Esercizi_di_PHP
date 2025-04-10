<?php

$cities = [
    'London' => 'UK',
    'Paris' => 'France',
    'Napoli'=> 'Italy',
    'Madrid'=> 'Spain',
    'Berlin'=> 'Germany',
    'Lisbon'=> 'Portugal',
    'Amsterdam'=> 'Netherlands',
    'Brussels'=> 'Belgium',    
];
$city = isset($_GET['city']) && array_key_exists($_GET['city'], $cities) ? $_GET['city'] : null;
$address = $city ? $cities[$city] : 'Select a city to see the country.';
?>
<?php foreach ($cities as $key => $value) { ?>
    <a href="?city=<?= urlencode($key) ?>"><?= htmlspecialchars($key) ?></a>

    <?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $city ?></h1>
    <p><?= $address ?></p>
</body>
</html>