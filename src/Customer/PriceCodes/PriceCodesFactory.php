<?php

namespace App\Customer\PriceCodes;

use App\Customer\Customer;
use App\Movie\Movie;
use App\Rental\Rental;

/**
 * Class PriceCodesFactory
 * @package App\Customer\PriceCodes
 */
class PriceCodesFactory
{
    public static function create(int $priceCode)
    {
        switch($priceCode) {

            case "0":

                return new RegularPriceCode();

            case "1":

                return new NewReleasePriceCode();

            case "2":

                return new ChildrenPriceCode();

            default:
                throw new InvalidArgumentException('This price code is missing!');
        }
    }
}