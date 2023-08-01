<?php

namespace pl\kir\sds\soap;

class NullType extends StringType
{
    protected $pattern = '/^$/';
}