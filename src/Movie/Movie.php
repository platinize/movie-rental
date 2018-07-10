<?php

namespace App\Movie;

use App\Customer\Customer;

class Movie implements MovieInterface
{
    const CHILDRENS = 2;

    const REGULAR = 0;

    const NEW_RELEASE = 1;
    
    public $title;

    public $priceCode;
    
    public function __construct($title, $priceCode) 
    {
        $this->title = $title;
        $this->setPriceCode($priceCode);
    }
    
    public function getPriceCode(): int
    {
        return $this->priceCode;
    }
    
    public function setPriceCode($priceCode): void 
    {
        $this->priceCode = $priceCode;
    }
    
    public function getTitle(): string 
    {
        return $this->title;
    }
}