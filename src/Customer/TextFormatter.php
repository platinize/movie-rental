<?php

namespace App\Customer;


class TextFormatter implements Formatable
{
    public function format(array $param): string
    {
        $result = "Rental Record for " . $param['generalParam']['name'] . "\n";

        foreach ($param['options'] as $option) {
            $result .= "\t" . $option['title'] . "\t" . $option['amount'] . "\n";
        }
        $result .= "Amount owed is " . $param['generalParam']['totalAmount'] . "\n";
        $result .= "You earned " . $param['generalParam']['frequentRenterPoints'] . " frequent renter points";

        return $result;
    }
}