<?php
require_once 'SavingsAccount.php';
require_once 'CurrentAccount.php';

// Factory class to create different types of accounts
class AccountFactory {
    // Static method to create an account based on the type
    public static function createAccount($type) {
        switch ($type) {
            case 'savings':
                return new SavingsAccount(); // Return a new SavingsAccount instance
            case 'current':
                return new CurrentAccount(); // Return a new CurrentAccount instance
            default:
                return null; // Return null for unknown account type
        }
    }
}
