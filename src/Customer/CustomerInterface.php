<?php

namespace App\Customer;

use App\Movie\Movie;
use App\Rental\Rental;

interface CustomerInterface
{
    public function addRental(Rental $rental): void;

    public function getName(): string;

    public function statement(string $format);

}