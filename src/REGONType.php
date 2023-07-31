<?php

namespace pl\kir\sds\soap;

final class REGONType extends StringType
{
    protected $pattern = '/^([0-9]{14}|[0-9]{9})$/';
}
