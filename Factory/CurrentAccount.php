<?php
require_once 'Account.php';

// Concrete class for current accounts
class CurrentAccount extends Account {
    // Deposit method implementation for current account
    public function deposit($amount) {
        $this->balance += $amount;
    }

    // Withdraw method implementation for current account
    public function withdraw($amount) {
        $this->balance -= $amount;
    }
}
