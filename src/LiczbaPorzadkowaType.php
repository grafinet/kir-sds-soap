<?php

namespace pl\kir\sds\soap;

final class LiczbaPorzadkowaType extends StringType
{
    protected $pattern = '/^[0-9]{1,3}$/';
}
