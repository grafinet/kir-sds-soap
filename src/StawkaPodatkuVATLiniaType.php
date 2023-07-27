<?php

namespace pl\kir\sds\soap;

enum StawkaPodatkuVATLiniaType: string {
    case STAWKA_PODSTAWOWA_23 = 'Stawka podstawowa (23%)';
    case STAWKA_OBNIZONA_8 = 'Stawka obniżona (8%)';
    case STAWKA_OBNIZONA_5 = 'Stawka obniżona (5%)';
    case STAWKA_OBNIZONA_0 = 'Stawka obniżona (0%)';
    case STAWKA_ZWOLNIONA = 'Stawka zwolniona';
    case BEZ_VAT = 'Bez VAT';
}
