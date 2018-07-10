<?php

namespace App\Rental;

interface RentalInterface
{
    public function getDaysRented(): int;

    public function getMovie(): string;
}