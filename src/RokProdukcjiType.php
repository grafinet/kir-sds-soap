<?php

namespace pl\kir\sds\soap;

final class RokProdukcjiType extends StringType
{
    protected $pattern = '/^[1-9][0-9]{3}$/';
}
