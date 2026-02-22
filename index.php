<?php

class Account {
    public $title;
    public $accountNo;
    protected $balance;

    public function __construct($title, $accountNo, $balance)
    {
        $this->title = $title;
        $this->accountNo = $accountNo;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance = $amount + $this->balance;
    }

    public function withdraw($amount) {
        $this->balance = $this->balance - $amount;
    }

    public function getBalance() {
        return 'Balance in your account no. ' . $this->accountNo . ' is PKR: ' . $this->balance;
    }
}

class SavingAccount extends Account 
{
    public $interest;

    public function __construct($title, $accountNo, $balance, $interest) {
        parent::__construct($title, $accountNo, $balance);
        
        $this->interest = $interest;
    }

    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount * ($this->interest / 100);
    }
}

$savingAccount = new SavingAccount('Aziz', 'PKR123', 10000, 10);

$balance = $savingAccount->getBalance();

echo $balance;

$savingAccount->deposit(10000);

$savingBalance = $savingAccount->getBalance();

echo '<br>';
echo $savingBalance;

// $account = new Account(2000);

// $account->balance = 2000;

// $account->deposit(10000);

// $balance = $account->getBalance();

// echo 'The balance is: ' . $balance;

// $account->withdraw(500);

// $balance = $account->getBalance();

// echo '<br> The balance after withdrawal is: ' . $balance;
?>

<html>
    <head>
        <title>Account Class</title>
    </head>
    <body>
        
    </body>
</html>