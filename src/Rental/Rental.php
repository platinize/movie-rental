<?php

namespace App\Rental;

use App\Movie\Movie;

class Rental implements RentalInterface
{
    /** @var Movie */
    public $movie;

    /** @var int */
    public $daysRented;

    /**
     * Rental constructor.
     * @param Movie $movie
     * @param $daysRented int
     */
    public function __construct(Movie $movie, int $daysRented)
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