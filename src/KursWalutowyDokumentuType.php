<?php

namespace pl\kir\sds\soap;

class KursWalutowyDokumentuType extends StringType
{
    protected $pattern = '/^[0-9]+,[0-9]{4}$/';
}