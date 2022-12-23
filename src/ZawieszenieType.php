<?php

namespace pl\kir\sds\soap\api;

enum ZawieszenieType: string {
    case PNEUMATYCZNE_ROWNOZNACZNE_Z_PNEUMATYCZNYM = 'Pneumatyczne/równoznaczne z pneumatycznym';
    case INNE = 'Inne';
}
