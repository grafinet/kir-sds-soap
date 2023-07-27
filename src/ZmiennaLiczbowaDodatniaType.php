<?php

namespace pl\kir\sds\soap;

use Cassandra\Exception\ValidationException;
use function sprintf;

final class ZmiennaLiczbowaDodatniaType extends IntegerType
{
    protected function validate($value)
    {
        parent::validate($value);
        if ((int)$value < 0) {
            throw new ValidationException(sprintf("Value for '%s' should be positive integer", static::class));
        }
    }
}
