<?php

namespace pl\kir\sds\soap;

final class KodUczestnikaType extends StringType
{
    protected $pattern = self::TEKST_512;
}