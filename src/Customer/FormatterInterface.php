<?php

namespace App\Customer;

interface FormatterInterface
{
    public function format(array $options, array $generalParam): string;
}