<?php

namespace pl\kir\sds\soap;

use function sprintf;

final class ZmiennaLiczbowaNieujemnaType extends IntegerType
{
    protected function validate($value)
    {
        parent::validate($value);
        if ((int)$value < 0) {
            throw new Exception\RestrictionException(sprintf("Value for '%s' should be non-negative integer", static::class));
        }
    }
}
