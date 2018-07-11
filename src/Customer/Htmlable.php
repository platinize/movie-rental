<?php

namespace App\Customer;

class Htmlable implements FormatterInterface
{
    public function format(array $options, array $generalParam): string
    {
        $result = "<h3>" . $generalParam['name'] . "</h3>";

        foreach ($options as $option) {
            $result .= "<p>" . $option['title'] . " / amount: " . $option['amount'] . "</p>";
        }

        $result .= "<p>Amount owed is - " . $generalParam['totalAmount'] . "</p>";
        $result .= "<p>You earned " . $generalParam['frequentRenterPoints'] . " frequent renter points</p>";

        return $result;
    }
}