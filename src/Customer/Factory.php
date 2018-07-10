<?php

namespace App\Customer;

class Factory 
{
    public static function getResult(string $str)
    {
        swicth($str) {

            case "html":
                return new ToHtml();
            case "string":
                return new ToString();
        }
    }
}