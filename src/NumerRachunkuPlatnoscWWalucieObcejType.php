<?php

namespace pl\kir\sds\soap;

class NumerRachunkuPlatnoscWWalucieObcejType extends StringType
{
    protected $pattern = '/^([A-Z]{2}[ \\-]?[0-9]{2})(\\?\\=(\\?\\:[ \\-]?[A-Z0-9]){9,30}$)((\\?\\:[ \\-]?[A-Z0-9]{3,5}){2,7})([ \\-]?[A-Z0-9]{1,3})?$/';
}