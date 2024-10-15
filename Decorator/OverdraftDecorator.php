<?php
require_once 'Account.php';

// Decorator for adding overdraft functionality
class OverdraftDecorator implements Account {
    protected $account;
    protected $overdraftLimit;

    // Constructor to set the wrapped account and overdraft limit
    public function __construct(Account $account, $overdraftLimit) {
        $this->account = $account;
        $this->overdraftLimit = $overdraftLimit;
    }

    // Delegate deposit to the wrapped account
    public function deposit($amount) {
        $this->account->deposit($amount);
    }

    // Override withdraw method to allow overdraft
    public function withdraw($amount) {
        if ($amount <= $this->account->getBalance() + $this->overdraftLimit) {
            $this->account->withdraw($amount);
        }
    }

    // Delegate getBalance to the wrapped account
    public function getBalance() {
        return $this->account->getBalance();
    }
}
