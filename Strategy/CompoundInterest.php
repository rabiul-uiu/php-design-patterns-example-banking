<?php
require_once 'InterestStrategy.php';

// Class implementing compound interest calculation
class CompoundInterest implements InterestStrategy {
    public function calculateInterest($principal, $rate, $time) {
        return $principal * pow((1 + $rate / 100), $time) - $principal;
    }
}
