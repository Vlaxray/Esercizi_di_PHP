<?php
$user['name'] = 'Ivy<script src="js/bad.js"></script>';
$user['age'] = '23.72';
$user['email'] = '£ivy@eg.link/';

$sanitize_user['name'] = FILTER_SANITIZE_FULL_SPECIAL_CHARS;
$sanitize_user['age'] = FILTER_SANITIZE_NUMBER_INT;
$sanitize_user['email'] = FILTER_SANITIZE_EMAIL;

$user = filter_Var_array($user, $sanitize_user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Name:  <?= $user['name'] ?></p>
<p>Age:  <?= $user['age'] ?></p>
<p>Email:  <?= $user['email'] ?></p>
<pre><?php var_dump($user); ?></pre>
</body>
</html>
