<?php

namespace pl\kir\sds\soap;

final class KodPocztowyType extends StringType
{
    protected $pattern = '/^[0-9]{2}-[0-9]{3}$/';
}
