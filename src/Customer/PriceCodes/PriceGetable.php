<?php

namespace App\Customer\PriceCodes;

interface PriceGetable
{
    public function get(int $daysRented): int;
}