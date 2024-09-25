<?php

declare(strict_types=1);

require 'vendor/autoload.php';

$invoice = new OopExercises\Traits\Auditable\Invoice();
$transaction = new OopExercises\Traits\Auditable\Transaction();
$userAccount = new OopExercises\Traits\Auditable\UserAccount();

$invoice->recordCreation();
$transaction->recordCreation();
$userAccount->recordCreation();