<?php
declare(strict_types=1);

$age  ='';
$message='';

function is_number($number, int$min=0, int $max= 100): bool{
return $number >= $min && $number <= $max;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $valid = is_number($age,20,35);
    if ($valid) {
        $message = "Your age is valid.";
    } else {
        $message = "Your age is not valid.";
    }
}
?>
<?= $message ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checking_age.php" method="POST">
    Age: <input type="text" name="age" size="4"
    value="<?= htmlspecialchars($age) ?>">
    <input type="submit" value="Save">
    </form>
</body>
</html>