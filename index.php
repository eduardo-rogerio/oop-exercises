<?php

declare(strict_types=1);

use OopExercises\Traits\Notifiable\EmailNotifier;
use OopExercises\Traits\Notifiable\PushNotifier;
use OopExercises\Traits\Notifiable\SMSNotifier;

require 'vendor/autoload.php';

$email = new EmailNotifier;
$sms = new SMSNotifier;
$push = new PushNotifier;

dump($email->sendNotification('Notificação por e-mail'),$sms->sendNotification('Notificação por SMS'),$push->sendNotification('Notificação por push'));
