<?php

namespace App\Movie;

use App\Customer\Customer;

class Movie implements MovieInterface
{
    const NEW_RELEASE = 1;
    const CHILDRENS = 2;
    const REGULAR = 0;

    /** @var string */
    public $title;

    /** @var string */
    public $priceCode;

    // typehint
    public function __construct($title, $priceCode)
    {
        $this->title = $title;
        $this->setPriceCode($priceCode);
    }

    public function getPriceCode(): int
    {
        return $this->priceCode;
    }

    public function setPriceCode(int $priceCode): void
    {
        $this->priceCode = $priceCode;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
