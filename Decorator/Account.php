<?php
// Interface for account classes
interface Account {
    public function deposit($amount);
    public function withdraw($amount);
    public function getBalance();
}
