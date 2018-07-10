<?php

namespace App\Customer;

interface FormatInterface
{
    public function getInFormat(array $options, array $generalParam): string;
}