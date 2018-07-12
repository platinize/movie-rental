<?php

namespace App\Customer;

class HtmlFormatter implements Formatable
{
    public function format(array $param): string
    {
        $result = "<h3>" . $param['generalParam']['name'] . "</h3>";

        foreach ($param['options'] as $option) {
            $result .= "<p>" . $option['title'] . " / amount: " . $option['amount'] . "</p>";
        }

        $result .= "<p>Amount owed is - " . $param['generalParam']['totalAmount'] . "</p>";
        $result .= "<p>You earned " . $param['generalParam']['frequentRenterPoints'] . " frequent renter points</p>";

        return $result;
    }
}