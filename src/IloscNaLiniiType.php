<?php

namespace pl\kir\sds\soap;

use pl\kir\sds\soap\Exception\RestrictionException;

final class IloscNaLiniiType extends IntegerType
{
    protected function validate($value)
    {
        parent::validate($value);
        if ((int)$value < 0 || (int)$value > 999_999) {
            throw new RestrictionException(sprintf("Value for '%s' should be an between 0 and 999999", static::class));
        }
    }
}
