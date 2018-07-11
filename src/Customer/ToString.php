<?php

namespace App\Customer;

// Textable (by default)
class ToString implements FormatInterface
{
    public function getInFormat(array $options, array $generalParam): string
    {
        $result = "Rental Record for " . $generalParam['name'] . "\n";

        foreach ($options as $option) {
            $result .= "\t" . $option['title'] . "\t" . $option['amount'] . "\n";
        }
        $result .= "Amount owed is " . $generalParam['totalAmount'] . "\n";
        $result .= "You earned " . $generalParam['frequentRenterPoints'] . " frequent renter points";

        return $result;
    }
}
