<?php

namespace App\Customer\PriceCodes;


class ChildrenPriceCode
{
    public function get(int $daysRented): int
    {
        if ($daysRented > 3) {
           return ($daysRented - 3) * 1.5 + 1.5;
        }

        return 1.5;
    }
}