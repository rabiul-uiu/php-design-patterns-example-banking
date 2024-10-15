<?php
// Class representing a bank that can notify observers
class Bank {
    private $observers = [];

    // Method to attach an observer
    public function attach($observer) {
        $this->observers[] = $observer;
    }

    // Method to notify all attached observers
    public function notify($message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}
