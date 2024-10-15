<?php
require_once 'InterestStrategy.php';

// Class implementing simple interest calculation
class SimpleInterest implements InterestStrategy {
    public function calculateInterest($principal, $rate, $time) {
        return ($principal * $rate * $time) / 100;
    }
}
