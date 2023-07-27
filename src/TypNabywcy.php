<?php

namespace pl\kir\sds\soap;

enum TypNabywcy: string
{
    case TYPE_NABYWCA = 'Nabywca';
    case TYPE_KUPUJACY = 'Kupujacy';
    case TYPE_LEASING = 'Leasing';
}
