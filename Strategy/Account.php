<?php
require_once 'InterestStrategy.php';

// Class representing a bank account that uses a specific interest strategy
class Account {
    private $balance = 0;
    private $interestStrategy;

    // Constructor to set the interest strategy
    public function __construct(InterestStrategy $strategy) {
        $this->interestStrategy = $strategy;
    }

    // Method to deposit money
    public function deposit($amount) {
        $this->balance += $amount;
    }

    // Method to calculate interest using the assigned strategy
    public function calculateInterest($rate, $time) {
        return $this->interestStrategy->calculateInterest($this->balance, $rate, $time);
    }
}
