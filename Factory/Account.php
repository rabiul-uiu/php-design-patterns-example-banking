<?php
// Abstract base class for different types of accounts
abstract class Account {
    protected $balance = 0;

    public abstract function deposit($amount);
    public abstract function withdraw($amount);

    // Method to get the current balance
    public function getBalance() {
        return $this->balance;
    }
}
