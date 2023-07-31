<?php

namespace pl\kir\sds\soap;

use function sprintf;

final class ZmiennaLiczbowaDodatniaType extends IntegerType
{
    protected function validate($value)
    {
        parent::validate($value);
        if ((int)$value < 1) {
            throw new Exception\RestrictionException(sprintf("Value for '%s' should be positive integer", static::class));
        }
    }
}
