<?php
declare(strict_types=1);
class Account
{
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct(int $number, string $type, float $balance = 0.00)   // Constructor method with default value for balance
   
    {
        $this->number = $number;    
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit(float $amount): float  // Method to deposit money into the account
    {
        $this->balance += $amount;
        return $this->balance;
    }
    
    
    public function withdraw(float $amount): float  // Method to withdraw money from the account
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float  // Method to get the current balance of the account
    {
        return $this->balance;
    }

    public function getPositive(): float {  
        if ($this->balance < 0) { // Check if balance is negative
            echo "Account is overdrawn!<br>"; $this->balance =  ($this->balance); // Format balance to 2 decimal places
            return $this->balance;
        } else {
            echo "Account is in good standing!<br>"; $this->balance = ($this->balance); // Format balance to 2 decimal places
            return $this->balance;
        }
        
    }
            
}
$account = new Account(20148896, 'Savings', 80.00);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2><?= $account->type ?> Account</h2>
  <p>Previous balance: $<?= $account->getBalance() ?></p>
  <p>New balance: $<?= $account->deposit(35.00) ?></p>
  <p>New Balance: $<?= $account->withdraw(200) ?></p>
  <p>Status: <?= $account->getPositive() ?></p>
  <p>Actual balance: $<?= $account->getBalance() ?></p>

  
</body>
</html>