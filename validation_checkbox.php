<?php
$terms = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $terms = (isset($_POST['terms'])  and $_POST['terms'] == true) ? true : false;
    $message = $terms ? 'Thank you' : 'You must accept the terms and conditions';

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
    <form action="validation_checkbox.php" method="POST">
I AGREE TO THE TERMS AND CONDITIONS: <input type="checkbox" name="terms" value="true" <?= ($terms) ? 'checked' : '' ?>>
        <input type="submit" value="Submit">
    </form>
</body>
</html>   
