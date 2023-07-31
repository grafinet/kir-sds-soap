<?php

namespace pl\kir\sds\soap;

final class KwotaJednostkowaNettoLiniaType extends StringType
{
    protected $pattern = '/^[0-9]+,[0-9]{2,6}$/';
}
