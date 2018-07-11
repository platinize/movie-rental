<?php

namespace App\Customer\PriceCodes;


class RegularPriceCode
{
    public function get(int $daysRented): int
    {
        if ($daysRented > 2) {
           return ($daysRented - 2) * 1.5 + 2;
        }

        return 2;
    }
}