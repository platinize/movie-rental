<?php

namespace App\Customer;

interface Formatable
{
    public function format(array $param): string;
}