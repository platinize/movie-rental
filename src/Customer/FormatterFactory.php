<?php

namespace App\Customer;

use App\Customer\ToHtml;
use App\Customer\ToString;


class FormatterFactory
{
    /**
     * @param $format
     * @return \App\Customer\ToHtml|\App\Customer\ToString
     */
    public static function create($format)
    {
        switch($format) {

            case "html":

                return new Htmlable();

            case "string":

                return new Textable();

            default:
                throw new InvalidArgumentException('Format not supported');
        }
    }
}