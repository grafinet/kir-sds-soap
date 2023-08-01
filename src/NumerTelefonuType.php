<?php

namespace pl\kir\sds\soap;

class NumerTelefonuType extends StringType
{
    protected $pattern = '/^\+[\d\s]{9,15}$/';
}
