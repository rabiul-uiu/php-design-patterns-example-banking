<?php
// Decorator Pattern
// Attaches additional responsibilities to an object dynamically.
// In this example, the OverdraftDecorator adds overdraft functionality to a basic account.

require_once 'BasicAccount.php';
require_once 'OverdraftDecorator.php';

// Create a basic account with an initial balance and deposit
$basicAccount = new BasicAccount(100);
$basicAccount->deposit(50);
echo "Basic Account Balance: " . $basicAccount->getBalance() . "\n";

// Create an overdraft account by wrapping the basic account
$overdraftAccount = new OverdraftDecorator($basicAccount, 50); // 50 as overdraft limit
$overdraftAccount->withdraw(130);
echo "Overdraft Account Balance: " . $overdraftAccount->getBalance() . "\n";
