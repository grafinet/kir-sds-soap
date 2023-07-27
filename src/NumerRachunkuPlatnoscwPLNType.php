<?php

namespace pl\kir\sds\soap;

class NumerRachunkuPlatnoscwPLNType extends StringType
{
    protected $pattern = '/^\d{26}$/';
}