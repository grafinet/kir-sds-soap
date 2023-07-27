<?php

namespace pl\kir\sds\soap;

enum TypOdbiorcy: string
{
    case TYPE_ODBIORCA = "Odbiorca";
    case TYPE_KORZYSTAJACY = "Korzystajacy";
    case TYPE_KLIENT = "Klient";
}
