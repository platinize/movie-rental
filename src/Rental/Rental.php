<?php

namespace App\Rental;

use App\Movie\Movie;

class Rental implements RentalInterface
{
    // typehint
    public $movie;

    public $daysRented;

    // typehint
    public function __construct(Movie $movie, $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    public function getMovie(): string
    {
        return $this->movie;
    }
}
