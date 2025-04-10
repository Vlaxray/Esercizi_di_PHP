<?php 
$stars = '';
$message ='';
$star_ratings = [1,2,3,4,5,6,7,8,9,10,];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $stars = $_POST['stars'] ?? '';
    $valid = in_array($stars, $star_ratings);
    $message = $valid ? 'Thank you for your rating!' : 'Please select a valid star rating';
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
    <form action="stars.php" method="POST">
        Star rating:
        <?php foreach ($star_ratings as $option) { ?>
            <?= $option ?> <input type="radio" name="stars" value="<?= $option ?>" <?= ($option == $stars) ? 'checked' : '' ?>>
            <?php } ?>
        <input type="submit" value="Submit">
       
    </form>
</body>
</html>