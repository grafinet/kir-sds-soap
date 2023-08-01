<?php

namespace pl\kir\sds\soap;

enum KlasyfikacjaPodatkowaType: string {
    case TYPE_740 = "740 - Motocykle, przyczepy i wózki motocyklowe";
    case TYPE_741 = "741 - Samochody osobowe";
    case TYPE_742 = '742 - Ciężarowe, o DMC > 3,5T';
    case TYPE_744 = '744 - Autobusy, Autokary';
    case TYPE_746 = '746 - Ciągniki siodłowe';
    case TYPE_747 = '747 - Naczepy';
    case TYPE_748 = '748 - Przyczepy';
}
