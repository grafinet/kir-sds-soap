<?php

namespace pl\kir\sds\soap;

class NIPPolskiType extends StringType
{
    protected $pattern = '/^[0-9]{10}$/';
}
