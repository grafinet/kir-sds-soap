<?php

namespace pl\kir\sds\soap;

final class idKomunikatuType extends StringType
{
    protected $pattern = '/^[0-9a-zA-Z][-_(.)\\/0-9a-zA-Z]*[0-9a-zA-Z]{1,40}$/';
}