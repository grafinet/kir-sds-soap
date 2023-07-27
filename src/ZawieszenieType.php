<?php

namespace pl\kir\sds\soap;

enum ZawieszenieType: string {
    case TYPE_PNEUMATYCZNE_ROWNOZNACZNE_Z_PNEUMATYCZNYM = 'Pneumatyczne/równoznaczne z pneumatycznym';
    case TYPE_INNE = 'Inne';
}
