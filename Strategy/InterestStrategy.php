<?php
// Interface for interest calculation strategies
interface InterestStrategy {
    public function calculateInterest($principal, $rate, $time);
}
