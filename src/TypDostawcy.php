<?php

namespace pl\kir\sds\soap;

enum TypDostawcy: string
{
    case TYPE_SPRZEDAWCA = "Sprzedawca";
    case TYPE_DOSTAWCA = "Dostawca";
    case TYPE_DEALER = "Dealer";
}
