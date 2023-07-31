<?php

namespace pl\kir\sds\soap;

final class PoleOpisoweType extends StringType
{
    protected $pattern = self::TEKST_5000;
}
