<?php 
session_start();
$counter = $_SESSION['counter'] ?? 0;
$counter = $counter + 1;
$_SESSION['counter'] = $counter;

$message = 'Page views: ' . $counter;
?>

<h1>Welcome</h1>
<p><?= $message ?></p>
<p><a href ="sessions.php">Refresh this page</a> to the page views icnrease.</p>