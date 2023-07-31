<?php

namespace pl\kir\sds\soap;

enum KlasyfikacjaPodatkowaType: string {
    case TYPE_742_CIEZAROWE_O_DMC__35T = '742 - Ciężarowe, o DMC > 3,5T';
    case TYPE_746_CIAGNIKI_SIODLOWE = '746 - Ciągniki siodłowe';
    case TYPE_744_AUTOBUSY_AUTOKARY = '744 - Autobusy, Autokary';
    case TYPE_747_NACZEPY = '747 - Naczepy';
    case TYPE_748_PRZYCZEPY = '748 - Przyczepy';
}
