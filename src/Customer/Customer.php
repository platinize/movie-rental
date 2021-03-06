<?php

namespace App\Customer;

use App\Customer\Statement\Statement;
use App\Movie\Movie;
use App\Rental\Rental;

class Customer implements CustomerInterface
{
    /** @var string */
    public $name;

    /** @var int */
    public $rentals;

    /**
     * @param $name string Name of the tenant
     */
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
        $formatter = FormatterFactory::create($format);

        $statement = new Statement($this->rentals, $this->name);

        $param = $statement->create();

        return $formatter->format($param);
    }


}