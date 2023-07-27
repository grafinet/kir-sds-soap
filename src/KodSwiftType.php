<?php

namespace pl\kir\sds\soap;

final class KodSwiftType extends StringType
{
    protected $pattern = '/^([a-zA-Z]{4})([a-zA-Z]{2})(([2-9a-zA-Z])([0-9a-np-zA-NP-Z]))((([0-9a-wy-zA-WY-Z])([0-9a-zA-Z]{2}))|([xX]{3})|)$/';
}