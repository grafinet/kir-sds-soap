<?php

namespace pl\kir\sds\soap;

final class KwotaJednostkowaNettoLinia extends StringType
{
    protected $pattern = '/^[0-9]+,[0-9]{2,6}$/';
}
