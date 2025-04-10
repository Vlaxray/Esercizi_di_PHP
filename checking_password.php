<?php
declare(strict_types= 1);
$password = "";
$message = '';

function is_password(string $password): bool
{
if(
    mb_strlen($password) >=8
    and preg_match('/[A-Z]/', $password)
    and preg_match('/[a-z]/', $password)
    and preg_match('/[0-9]/', $password)
)

{ 
    return true;
}    
 return false;}
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $valid = is_password($password);
    $message = $valid ? "Your password is valid.": "Your password is not strong enough.";
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
    <form action="checking_password.php" method = "POST">
    Password: <input type="password" name="password">
    <input type="submit" value="Save">
    </form>
 </body>
 </html>