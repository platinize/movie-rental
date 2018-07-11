<?php

namespace App\Customer;

// FormatterInterface
interface FormatInterface
{
    // format
    public function getInFormat(array $options, array $generalParam): string;
}
