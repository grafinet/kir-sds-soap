<?php

namespace pl\kir\sds\soap;

class PoleOpisoweType extends StringType
{
    protected $pattern = self::TEKST_5000;
}