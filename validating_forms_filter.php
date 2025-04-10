<?php
$user = ['name' => '','age'=> '', 'terms' =>'',];
$errors = ['name' => '', 'age' => '', 'terms' => false,];
$message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validation_filters['name']['filter']              = FILTER_VALIDATE_REGEXP;
    $validation_filters['name']['options']['regexp']   = '/^[A-z]{2,10}$/';
    $validation_filters['age']['filter']               = FILTER_VALIDATE_INT;
    $validation_filters['age']['options']['min_range'] = 16;
    $validation_filters['age']['options']['max_range'] = 150;
    $validation_filters['terms']                       = FILTER_VALIDATE_BOOLEAN;

$user = filter_input_array(INPUT_POST, $validation_filters);

$errors['name']         = $user['name'] ? '' : 'Name must be 2-10 letters using A-z';
$errors['age']          = $user['age'] ? '' : 'You must be 16-150';
$errors['terms']        = $user['terms'] ? '' : 'You must accept the terms and conditions';
$invalid = implode($errors);

if ($invalid) {
    $message = 'Please correct the following errors: ';
} else {
    $message = 'Thank you, your data has been submitted.';
}
$user['name'] = filter_var($user['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user['age'] = filter_var($user['age'], FILTER_SANITIZE_NUMBER_INT);
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
<?= $message ?>
    <form action="validating_forms_filter.php" method='POST'>
    Name: <input type="text" name="name" value="<?= $user['name'] ?>"> 
    <span class="error"><?= $errors['name'] ?></span><br>
    Age: <input type="text" name="age" value="<?= $user['age'] ?>">
    <span class="error"><?= $errors['age'] ?></span><br>
    <input type="checkbox" name="terms" value="true"
    <?php $user['terms'] ? 'checked' : '' ?>> I accept the terms and conditions
    <span class="error"><?= $errors['terms'] ?></span><br>
    <input type="submit" value="Submit"> 
    </form>
</body>
</html>