<?php

namespace App\Customer\Statement;

use App\Customer\PriceCodes\PriceCodesFactory;
use App\Movie\Movie;

class Statement
{
    /** @var Rental[]  */
    public $rentals;

    /** @var string  */
    public $name;

    /**
     * Statement constructor.
     * @param $rentals object
     * @param $name string
     */
    public function __construct($rentals, $name)
    {
        $this->rentals = $rentals;
        $this->name = $name;
    }

    public function getFrequentRenterPoints(): int
    {
        $frequentRenterPoints = 0;

        foreach ($this->rentals as $rental){
            $frequentRenterPoints++;

            if (($rental->movie->getPriceCode() == Movie::NEW_RELEASE) && ($rental->getDaysRented() > 1)) {
                $frequentRenterPoints++;
            }
        }
        return $frequentRenterPoints;
    }

    public function getTotalAmount(): int
    {
        $totalAmount = 0;

        foreach ($this->rentals as $rental) {

            $thisAmount = $this->getAmount($rental);
            $totalAmount += $thisAmount;
        }

        return $totalAmount;
    }

    public function create(): array
    {
        foreach ($this->rentals as $rental) {

            $thisAmount = $this->getAmount($rental);

            $options[] = ['title' => $rental->movie->getTitle(), 'amount' => $thisAmount];
        }

        $generalParam = [
            'name' => $this->name,
            'totalAmount' => $this->getTotalAmount(),
            'frequentRenterPoints' => $this->getFrequentRenterPoints()
        ];

        return ['options' => $options, 'generalParam' => $generalParam];
    }

    /**
     * @param $rental object
     * @return float|int
     */
    public function getAmount($rental): int
    {
        $priceCode = PriceCodesFactory::create($rental->movie->getPriceCode());

        return $priceCode->get($rental->getDaysRented());
    }







}