<?php

namespace pl\kir\sds\soap;

final class NIPPolskiType extends StringType
{
    protected $pattern = '/^[0-9]{10}$/';
}
