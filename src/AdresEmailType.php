<?php

namespace pl\kir\sds\soap;

final class AdresEmailType extends StringType
{
    protected $pattern = '/^[_\\-a-zA-Z0-9\\.\\+]+@[a-zA-Z0-9](\\.?[\\-a-zA-Z0-9]*[a-zA-Z0-9])*$/';
}
