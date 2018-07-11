<?php

namespace App\Movie;


class Movie implements MovieInterface
{
    const CHILDRENS = 2;

    const REGULAR = 0;

    const NEW_RELEASE = 1;

    /** @var string */
    public $title;

    /** @var int */
    public $priceCode;


    /**
     * Movie constructor.
     * @param $title string
     * @param $priceCode int
     */
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