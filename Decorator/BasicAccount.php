<?php
require_once 'Account.php';

// Basic account implementation
class BasicAccount implements Account {
    protected $balance; // Account balance

    // Constructor to initialize the balance
    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
    }

    // Deposit method implementation
    public function deposit($amount) {
        $this->balance += $amount;
    }

    // Withdraw method implementation
    public function withdraw($amount) {
        if ($amount <= $this->balance) { // Check sufficient balance
            $this->balance -= $amount;
        }
    }

    // Get the current balance
    public function getBalance() {
        return $this->balance;
    }
}
