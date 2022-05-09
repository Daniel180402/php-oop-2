<?php

class Product {
    private string $name;
    private string $category;
    private float $price;


    public function __construct(string $name, string $category, float $price) {
        $this->price = $price;
        $this->name = $name;
        $this->category = $category;
    }

    public function getName(): string {
        return $this->name;
    }
    
    public function getCategory(): string {
        return $this->category;
    }
    
    public function getPrice(): float {
        return $this->price;
    }
}