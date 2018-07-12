<?php

namespace App\Customer;

use App\Customer\HtmlFormatter;
use App\Customer\TextFormatter;


class FormatterFactory
{
    /**
     * @param $format string
     * @return \App\Customer\ToHtml|\App\Customer\ToString
     */
    public static function create($format)
    {
        switch($format) {

            case "html":

                return new HtmlFormatter();

            case "string":

                return new TextFormatter();

            default:
                throw new InvalidArgumentException('Format not supported');
        }
    }
}