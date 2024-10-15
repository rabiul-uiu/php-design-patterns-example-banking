<?php
require_once 'Account.php';

// Concrete class for savings accounts
class SavingsAccount extends Account {
    // Deposit method implementation for savings account
    public function deposit($amount) {
        $this->balance += $amount;
    }

    // Withdraw method implementation for savings account
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}
