<?php

namespace App\Customer;

use App\Customer\ToHtml;
use App\Customer\ToString;

class Factory
{

    // typehint
    // create(string $format)
    public static function getFormat($format)
    {
        switch($format) {
            case "html":
                return new ToHtml();
            case "string":
                return new ToString();
            default:
                throw new InvalidArgumentException('Format not supported');
        }
    }
}
