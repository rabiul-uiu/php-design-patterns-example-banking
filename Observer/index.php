<?php
// Observer Pattern
// Defines a one-to-many dependency between objects so that when one object changes state,
// all its dependents are notified and updated automatically.
// In this example, the Bank class notifies its observers about account changes.

require_once 'Bank.php';
require_once 'AccountObserver.php';

// Create a bank instance
$bank = new Bank();
$observer = new AccountObserver(); // Create an observer instance

// Attach the observer to the bank
$bank->attach($observer);
// Notify observers about an account change
$bank->notify("Account balance updated.");
