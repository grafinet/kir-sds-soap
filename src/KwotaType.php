<?php

namespace pl\kir\sds\soap;

final class KwotaType extends StringType
{
    protected $pattern = '/^[0-9]+,[0-9]{2}$/';
}
