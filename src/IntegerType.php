<?php

namespace pl\kir\sds\soap;

use pl\kir\sds\soap\Exception\RestrictionException;
use function number_format;
use function sprintf;

abstract class IntegerType
{
    public function __construct(private readonly string|int|float $value)
    {
        $this->validate($this->value);
    }
    
    protected function validate($value) {
        if (!\is_numeric($value)) {
            throw new RestrictionException(sprintf("Value for '%s' should be an integer", static::class));
        }
    }

    public function __toString(): string
    {
        return number_format((float)$this->value, 0);
    }
}