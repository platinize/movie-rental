<?php

namespace App\Customer;

use App\Customer\Factory;
use App\Movie\Movie;
use App\Rental\Rental;


class Customer implements CustomerInterface
{
    public $name;

    public $rentals;
    
    public function __construct($name) 
    {
        $this->name = $name;
    }
    
    public function addRental(Rental $rental): void 
    {
        $this->rentals[] = $rental;
    }
    
    public function getName(): string 
    {
        return $this->name;
    }
    
    public function statement(string $format = 'string')
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $options = [];

        $format = Factory::getFormat($format);
        
        foreach ($this->rentals as $each) {

            $thisAmount = $this->getAmount($each);

            $frequentRenterPoints++;

            if (($each->movie->getPriceCode() == Movie::NEW_RELEASE) && ($each->getDaysRented() > 1)) {
                $frequentRenterPoints++;
            }

            $totalAmount += $thisAmount;

            $options[] = ['title' => $each->movie->getTitle(), 'amount' => $thisAmount];
        }

        $generalParam = ['name' => $this->getName(), 'totalAmount' => $totalAmount, 'frequentRenterPoints' => $frequentRenterPoints];

        return $format->getInFormat($options, $generalParam);
    }

    public function getAmount($each)
    {
        $thisAmount = 0;
            
        switch ($each->movie->getPriceCode()) {

            case Movie::REGULAR:
                $thisAmount += 2;

                if ($each->getDaysRented() > 2) {
                    $thisAmount += ($each->getDaysRented() - 2) * 1.5;
                }

                break;

            case Movie::NEW_RELEASE:
                $thisAmount += $each->getDaysRented() * 3;

                break;

            case Movie::CHILDRENS:
                $thisAmount += 1.5;

                if ($each->getDaysRented() > 3) {
                    $thisAmount += ($each->getDaysRented() - 3) * 1.5;
                }

                break;
        }

        return $thisAmount;
    }
}