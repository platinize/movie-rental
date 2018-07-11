<?php

namespace App\Customer\Statement;

use App\Movie\Movie;
use App\Rental\Rental;
use App\Customer\Customer;

interface StatementInterface
{
    public function create();

    public function getAmount($rental);

}