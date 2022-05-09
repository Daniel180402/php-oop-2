<?php

require_once __DIR__ . "./Card.php";
require_once __DIR__ . "./Cart.php";

class User {
    protected string $fullName;
    protected string $useruserEmail;
    protected string $password;
    protected Card $card;
    protected Cart $cart;

    public function __construct(string $fullName, string $userEmail, string $password, Card $card = null) {
        $this->fullName = $fullName;
        $this->userEmail = $userEmail;
        $this->password = $password;
        $this->card = $card;
        $this->cart = new Cart();
    }

    public function getfullName(): string {
        return $this->fullName;
    }

    public function getCard(): Card {
        return $this->card;
    }

    public function getCart(): Cart {
        return $this->cart;
    }

    public function getTotalCartAmount(): float {
        return $this->cart->getTotal();
    }

    public function pay(): bool {
        return !$this->card->isExpired();
    }
}