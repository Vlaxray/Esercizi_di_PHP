<?php
$counter = $_COOKIE['counter'] ?? 0;
$counter = $counter +1;
setcookie('counter', $counter);
    $message = 'Page views: ' . $counter; 
    ?>
    <h1>Welcome</h1>
    <p><?= $message ?></p>
    <p>Refresh this page to see the page views increase</p>