<?php
// Strategy Pattern
// Defines a family of algorithms, encapsulates each one, and makes them interchangeable.
// In this example, the Account class can calculate interest using different strategies (Simple and Compound).

require_once 'Account.php';
require_once 'SimpleInterest.php';
require_once 'CompoundInterest.php';

// Create an account using simple interest strategy
$simpleAccount = new Account(new SimpleInterest());
$simpleAccount->deposit(1000); // Deposit into the account
echo "Simple Interest: " . $simpleAccount->calculateInterest(5, 2) . "\n";

// Create an account using compound interest strategy
$compoundAccount = new Account(new CompoundInterest());
$compoundAccount->deposit(1000); // Deposit into the account
echo "Compound Interest: " . $compoundAccount->calculateInterest(5, 2) . "\n";
