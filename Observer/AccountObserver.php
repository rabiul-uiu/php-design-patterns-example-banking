<?php
// Class representing an observer that listens for account changes
class AccountObserver {
    // Method to receive notifications
    public function update($message) {
        echo "Notification: $message\n";
    }
}
