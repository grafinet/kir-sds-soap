<?php

namespace pl\kir\sds\soap;

final class idZalacznikaType extends StringType
{
    protected $pattern = '/^[1-9][0-9]?$/';
}