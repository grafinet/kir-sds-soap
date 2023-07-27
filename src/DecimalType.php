<?php

namespace pl\kir\sds\soap;

class DecimalType
{
    protected $decimals = 4;
    public function __construct(private readonly string|float $value)
    {
        
    }

    public function __toString(): string
    {
        return number_format((float)$this->value, $this->value, '.', '');
    }
}