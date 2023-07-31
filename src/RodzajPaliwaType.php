<?php

namespace pl\kir\sds\soap;

enum RodzajPaliwaType: string
{
    case TYPE_P = 'P';
    case TYPE_D = 'D';
    case TYPE_M = 'M';
    case TYPE_LPG = 'LPG';
    case TYPE_CNG = 'CNG';
    case TYPE_LNG = 'LNG';
    case TYPE_H = 'H';
    case TYPE_BD = 'BD';
    case TYPE_E85 = 'E85';
    case TYPE_EE = 'EE';
    case TYPE_999 = '999';
}
