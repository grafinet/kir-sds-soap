<?php

namespace pl\kir\sds\soap;

final class NrVINType extends StringType
{
    protected $pattern = '/^[0-9A-Z]{17}$/';
}
