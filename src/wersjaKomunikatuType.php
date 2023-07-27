<?php

namespace pl\kir\sds\soap;

class wersjaKomunikatuType extends StringType
{
    protected $pattern = '/^[0-9a-zA-Z_\.\-\\/]{1,40}$/';
}
