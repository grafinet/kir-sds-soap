<?php

namespace pl\kir\sds\soap;

final class KodSDSType extends StringType
{
    protected $pattern = '/^([0-9]{4}_[0-9]{4}-[0-1][0-9]-[0-3][0-9](\\s[0-2][0-9]:[0-5][0-9]:[0-5][0-9]_)([A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12})?)$/';
}
