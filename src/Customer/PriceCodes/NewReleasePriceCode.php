<?php

namespace App\Customer\PriceCodes;


class NewReleasePriceCode implements PriceGetable
{
    public function get(int $daysRented): int
    {
        return $daysRented * 3;
    }
}