<?php

namespace pl\kir\sds\soap;

enum KodKrajuType: string {
    case TYPE_AF = 'AF';
    case TYPE_AL = 'AL';
    case TYPE_DZ = 'DZ';
    case TYPE_AD = 'AD';
    case TYPE_AO = 'AO';
    case TYPE_AI = 'AI';
    case TYPE_AQ = 'AQ';
    case TYPE_AG = 'AG';
    case TYPE_SA = 'SA';
    case TYPE_AR = 'AR';
    case TYPE_AM = 'AM';
    case TYPE_AW = 'AW';
    case TYPE_AU = 'AU';
    case TYPE_AT = 'AT';
    case TYPE_AZ = 'AZ';
    case TYPE_BS = 'BS';
    case TYPE_BH = 'BH';
    case TYPE_BD = 'BD';
    case TYPE_BB = 'BB';
    case TYPE_BE = 'BE';
    case TYPE_BZ = 'BZ';
    case TYPE_BJ = 'BJ';
    case TYPE_BM = 'BM';
    case TYPE_BT = 'BT';
    case TYPE_BY = 'BY';
    case TYPE_BO = 'BO';
    case TYPE_BQ = 'BQ';
    case TYPE_BA = 'BA';
    case TYPE_BW = 'BW';
    case TYPE_BR = 'BR';
    case TYPE_BN = 'BN';
    case TYPE_IO = 'IO';
    case TYPE_VG = 'VG';
    case TYPE_BG = 'BG';
    case TYPE_BF = 'BF';
    case TYPE_BI = 'BI';
    case TYPE_CL = 'CL';
    case TYPE_CN = 'CN';
    case TYPE_HR = 'HR';
    case TYPE_CW = 'CW';
    case TYPE_CY = 'CY';
    case TYPE_TD = 'TD';
    case TYPE_ME = 'ME';
    case TYPE_CZ = 'CZ';
    case TYPE_UM = 'UM';
    case TYPE_DK = 'DK';
    case TYPE_CD = 'CD';
    case TYPE_DM = 'DM';
    case TYPE_DO = 'DO';
    case TYPE_DJ = 'DJ';
    case TYPE_EG = 'EG';
    case TYPE_EC = 'EC';
    case TYPE_ER = 'ER';
    case TYPE_EE = 'EE';
    case TYPE_SZ = 'SZ';
    case TYPE_ET = 'ET';
    case TYPE_FK = 'FK';
    case TYPE_FJ = 'FJ';
    case TYPE_PH = 'PH';
    case TYPE_FI = 'FI';
    case TYPE_FR = 'FR';
    case TYPE_TF = 'TF';
    case TYPE_GA = 'GA';
    case TYPE_GM = 'GM';
    case TYPE_GS = 'GS';
    case TYPE_GH = 'GH';
    case TYPE_GI = 'GI';
    case TYPE_GR = 'GR';
    case TYPE_GD = 'GD';
    case TYPE_GL = 'GL';
    case TYPE_GE = 'GE';
    case TYPE_GU = 'GU';
    case TYPE_GG = 'GG';
    case TYPE_GF = 'GF';
    case TYPE_GY = 'GY';
    case TYPE_GP = 'GP';
    case TYPE_GT = 'GT';
    case TYPE_GW = 'GW';
    case TYPE_GQ = 'GQ';
    case TYPE_GN = 'GN';
    case TYPE_HT = 'HT';
    case TYPE_ES = 'ES';
    case TYPE_NL = 'NL';
    case TYPE_HN = 'HN';
    case TYPE_HK = 'HK';
    case TYPE_IN = 'IN';
    case TYPE_ID = 'ID';
    case TYPE_IQ = 'IQ';
    case TYPE_IR = 'IR';
    case TYPE_IE = 'IE';
    case TYPE_IS = 'IS';
    case TYPE_IL = 'IL';
    case TYPE_JM = 'JM';
    case TYPE_JP = 'JP';
    case TYPE_YE = 'YE';
    case TYPE_JE = 'JE';
    case TYPE_JO = 'JO';
    case TYPE_KY = 'KY';
    case TYPE_KH = 'KH';
    case TYPE_CM = 'CM';
    case TYPE_CA = 'CA';
    case TYPE_QA = 'QA';
    case TYPE_KZ = 'KZ';
    case TYPE_KE = 'KE';
    case TYPE_KG = 'KG';
    case TYPE_KI = 'KI';
    case TYPE_CO = 'CO';
    case TYPE_KM = 'KM';
    case TYPE_CG = 'CG';
    case TYPE_KR = 'KR';
    case TYPE_KP = 'KP';
    case TYPE_CR = 'CR';
    case TYPE_CU = 'CU';
    case TYPE_KW = 'KW';
    case TYPE_LA = 'LA';
    case TYPE_LS = 'LS';
    case TYPE_LB = 'LB';
    case TYPE_LR = 'LR';
    case TYPE_LY = 'LY';
    case TYPE_LI = 'LI';
    case TYPE_LT = 'LT';
    case TYPE_LU = 'LU';
    case TYPE_LV = 'LV';
    case TYPE_MK = 'MK';
    case TYPE_MG = 'MG';
    case TYPE_YT = 'YT';
    case TYPE_MO = 'MO';
    case TYPE_MW = 'MW';
    case TYPE_MV = 'MV';
    case TYPE_MY = 'MY';
    case TYPE_ML = 'ML';
    case TYPE_MT = 'MT';
    case TYPE_MP = 'MP';
    case TYPE_MA = 'MA';
    case TYPE_MQ = 'MQ';
    case TYPE_MR = 'MR';
    case TYPE_MU = 'MU';
    case TYPE_MX = 'MX';
    case TYPE_FM = 'FM';
    case TYPE_MM = 'MM';
    case TYPE_MD = 'MD';
    case TYPE_MC = 'MC';
    case TYPE_MN = 'MN';
    case TYPE_MS = 'MS';
    case TYPE_MZ = 'MZ';
    case TYPE_NA = 'NA';
    case TYPE_NR = 'NR';
    case TYPE_NP = 'NP';
    case TYPE_DE = 'DE';
    case TYPE_NE = 'NE';
    case TYPE_NG = 'NG';
    case TYPE_NI = 'NI';
    case TYPE_NU = 'NU';
    case TYPE_NF = 'NF';
    case TYPE_NO = 'NO';
    case TYPE_NC = 'NC';
    case TYPE_OM = 'OM';
    case TYPE_PK = 'PK';
    case TYPE_PW = 'PW';
    case TYPE_PS = 'PS';
    case TYPE_PA = 'PA';
    case TYPE_PG = 'PG';
    case TYPE_PY = 'PY';
    case TYPE_PE = 'PE';
    case TYPE_PN = 'PN';
    case TYPE_PF = 'PF';
    case TYPE_PL = 'PL';
    case TYPE_PR = 'PR';
    case TYPE_PT = 'PT';
    case TYPE_ZA = 'ZA';
    case TYPE_CF = 'CF';
    case TYPE_CV = 'CV';
    case TYPE_RE = 'RE';
    case TYPE_RU = 'RU';
    case TYPE_RO = 'RO';
    case TYPE_RW = 'RW';
    case TYPE_EH = 'EH';
    case TYPE_KN = 'KN';
    case TYPE_LC = 'LC';
    case TYPE_VC = 'VC';
    case TYPE_BL = 'BL';
    case TYPE_MF = 'MF';
    case TYPE_PM = 'PM';
    case TYPE_SV = 'SV';
    case TYPE_AS = 'AS';
    case TYPE_WS = 'WS';
    case TYPE_SM = 'SM';
    case TYPE_SN = 'SN';
    case TYPE_RS = 'RS';
    case TYPE_SC = 'SC';
    case TYPE_SL = 'SL';
    case TYPE_SG = 'SG';
    case TYPE_SX = 'SX';
    case TYPE_SK = 'SK';
    case TYPE_SI = 'SI';
    case TYPE_SO = 'SO';
    case TYPE_LK = 'LK';
    case TYPE_US = 'US';
    case TYPE_SD = 'SD';
    case TYPE_SS = 'SS';
    case TYPE_SR = 'SR';
    case TYPE_SJ = 'SJ';
    case TYPE_SY = 'SY';
    case TYPE_CH = 'CH';
    case TYPE_SE = 'SE';
    case TYPE_TJ = 'TJ';
    case TYPE_TH = 'TH';
    case TYPE_TW = 'TW';
    case TYPE_TZ = 'TZ';
    case TYPE_TL = 'TL';
    case TYPE_TG = 'TG';
    case TYPE_TK = 'TK';
    case TYPE_TO = 'TO';
    case TYPE_TT = 'TT';
    case TYPE_TN = 'TN';
    case TYPE_TR = 'TR';
    case TYPE_TM = 'TM';
    case TYPE_TC = 'TC';
    case TYPE_TV = 'TV';
    case TYPE_UG = 'UG';
    case TYPE_UA = 'UA';
    case TYPE_UY = 'UY';
    case TYPE_UZ = 'UZ';
    case TYPE_VU = 'VU';
    case TYPE_WF = 'WF';
    case TYPE_VA = 'VA';
    case TYPE_VE = 'VE';
    case TYPE_HU = 'HU';
    case TYPE_GB = 'GB';
    case TYPE_VN = 'VN';
    case TYPE_IT = 'IT';
    case TYPE_CI = 'CI';
    case TYPE_BV = 'BV';
    case TYPE_CX = 'CX';
    case TYPE_IM = 'IM';
    case TYPE_SH = 'SH';
    case TYPE_AX = 'AX';
    case TYPE_CK = 'CK';
    case TYPE_VI = 'VI';
    case TYPE_HM = 'HM';
    case TYPE_CC = 'CC';
    case TYPE_MH = 'MH';
    case TYPE_FO = 'FO';
    case TYPE_SB = 'SB';
    case TYPE_ST = 'ST';
    case TYPE_ZM = 'ZM';
    case TYPE_ZW = 'ZW';
    case TYPE_AE = 'AE';
}
