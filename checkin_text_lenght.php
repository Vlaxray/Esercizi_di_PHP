<?php
declare(strict_types= 1);
$username = "";
$message  = "";

function is_text($text, int $min = 0, int $max = 100): bool {
    $length = mb_strlen($text);
    return ($length >= $min and $length <= $max);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $valid = is_text($username, 3,20);
    if ($valid) {
        $message = "Your username is valid.";
    } else {
        $message = "Your username is not valid.";
    }
}
?>
<?php echo $message;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkin_text_lenght.php" method="POST">
USERNAME: <input type="text" name="username"
value="<?= htmlspecialchars($username) ?>">
    <input type="submit" value="Save">
    </form>
</body>
</html>