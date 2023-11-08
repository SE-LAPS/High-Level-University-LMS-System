<?php

namespace classes;

class Wallet {
    private $walletid;
    private $amount;
    private $badgelevel;
    
    public function __construct($walletid,$amount,$badgelevel) {
        $this->walletid = $walletid;
        $this->amount = $amount;
        $this->badgelevel = $badgelevel;
    }
    
    public function getWalletId() {
        
    }
    public function getAmount() {
        
    }
    public function manageBadgeLevel() {
        
    }
    public function manageTransaction() {
        
    }
}
