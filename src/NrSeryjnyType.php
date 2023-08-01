<?php

namespace pl\kir\sds\soap;

class NrSeryjnyType extends StringType
{
    protected $pattern = '/^[0-9A-Z]{1,20}$/';
}
