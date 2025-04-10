<?php
$form['email'] = '';
$form['age']   = '';
$form['terms'] = 0;
$data          = [];

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $filters['email']                        = FILTER_VALIDATE_EMAIL;
    $filters['age']['filter']                = FILTER_VALIDATE_INT;
    $filters['age']['options']['min_range']  = 16;
    $filters['terms']                        = FILTER_VALIDATE_BOOLEAN;
    $form = filter_input_array(INPUT_POST);
    $data = filter_var_array($form, $filters);
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
    <form action="validating_forms.php" method="POST">
Email: <input type="text" name="email" value="<?= htmlspecialchars($form['email']) ?>">
Age: <input type="text" name="age" value="<?= htmlspecialchars($form['age']) ?>">
I agree to the terms and conditions -_- <input type="checkbox" name="terms" value="1"><br>
<input type="submit" value="Submit"> 
    </form>
    <pre><?php var_dump($data); ?></pre>
</body>
</html>
