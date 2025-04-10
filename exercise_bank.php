<?php
class Account
{
   public int    $number;
   public string $type;
   public float   $balance;
   public function deposit(float $amount): float
   {
    $this->balance += $amount;
    return $this->balance;
   }
   public function withdraw(float $amount): float
   {
    $this->balance -= $amount;
    return $this->balance;
   }
}

$account = new Account();
$account->balance = 1000.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>$<?= $account->deposit(125.00) ?></p>
    <p>$<?= $account->withdraw(50.00) ?></p>
    <p>$<?= $account->deposit(200.00) ?></p>
</body>
</html>