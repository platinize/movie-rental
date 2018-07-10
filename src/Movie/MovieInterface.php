<?php

namespace App\Movie;

interface MovieInterface
{
    public function getPriceCode(): int;

    public function setPriceCode(int $priceCode): void;

    public function getTitle(): string;
}