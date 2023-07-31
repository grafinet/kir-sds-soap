<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;
use Stringable;

abstract class DataGodzinaType implements Stringable
{
    public function __construct(private readonly string|DateTimeInterface $value)
    {
    }

    public function __toString(): string
    {
        if ($this->value instanceof DateTimeInterface) {
            return $this->value->format('Y-m-d\TH:i:s');
        }
        return $this->value;
    }
}
