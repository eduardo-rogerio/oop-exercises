<?php

declare(strict_types=1);

use OopExercises\Abstract\Bank\CheckingAccount;
use OopExercises\Abstract\Bank\SavingsAccount;

require 'vendor/autoload.php';

$checking_account = new CheckingAccount(agency: '1423', accountNumber: '162345');
$savings_account = new SavingsAccount(agency: '3452', accountNumber: '167456');

dump($checking_account->getBalance());
$checking_account->deposit(15000);
dump($checking_account->getBalance());
dump($checking_account->withdraw(5000));


