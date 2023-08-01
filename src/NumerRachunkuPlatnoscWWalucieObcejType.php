<?php

namespace pl\kir\sds\soap;

final class NumerRachunkuPlatnoscWWalucieObcejType extends StringType
{
    protected $pattern = '/^([A-Z]{2}[0-9]{2}[A-Z0-9]{1,30})$/';
}
