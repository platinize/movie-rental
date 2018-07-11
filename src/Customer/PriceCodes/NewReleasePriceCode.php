<?php

namespace App\Customer\PriceCodes;


class NewReleasePriceCode
{
    public function get(int $daysRented): int
    {
        return $daysRented * 3;
    }
}