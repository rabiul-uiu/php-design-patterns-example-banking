<?php
// Factory Pattern
// Defines an interface for creating an object, but lets subclasses alter the type of objects that will be created.
// In this example, the AccountFactory creates different types of bank accounts (Savings and Current).

require_once 'AccountFactory.php';

// Create a savings account using the factory
$savings = AccountFactory::createAccount('savings');
$savings->deposit(100);
echo "Savings Account Balance: " . $savings->getBalance() . "\n";

$current = AccountFactory::createAccount('current');
$current->deposit(200);
$current->withdraw(50);
echo "Current Account Balance: " . $current->getBalance() . "\n";
