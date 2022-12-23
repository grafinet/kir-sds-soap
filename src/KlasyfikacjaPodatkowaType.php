<?php

namespace pl\kir\sds\soap\api;

enum KlasyfikacjaPodatkowaType: string {
    case TYPE_742__CIEZAROWE_O_DMC__35T = '742 - Ciężarowe, o DMC > 3,5T';
    case TYPE_746__CIAGNIKI_SIODLOWE = '746 - Ciągniki siodłowe';
    case TYPE_744__AUTOBUSY_AUTOKARY = '744 - Autobusy, Autokary';
    case TYPE_747__NACZEPY = '747 - Naczepy';
    case TYPE_748__PRZYCZEPY = '748 - Przyczepy';
}
