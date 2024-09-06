<?php

use OopExercises\Interfaces\Notification\Customer;
use OopExercises\Interfaces\Notification\EmailNotifier;
use OopExercises\Interfaces\Notification\SMSNotifier;

require 'vendor/autoload.php';

$sms = new SMSNotifier();
$email = new EmailNotifier();
$customer = new Customer();
dump($customer->notify($sms,'plano renovado'),$customer->notify($email,'conta registrada com sucesso'));