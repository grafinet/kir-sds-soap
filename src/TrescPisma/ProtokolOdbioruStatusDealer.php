<?php

namespace pl\kir\sds\soap\TrescPisma;

use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\PoleOpisoweType;
use pl\kir\sds\soap\DataStatusDokumentuType;
use pl\kir\sds\soap\StopkaType;

class ProtokolOdbioruStatusDealer extends TrescPisma
{
    public const NAMESPACE_PREFIX = 'posd';
    public const NAMESPACE_URI = 'https://www.kir.pl/SystemDokumentowStrukturyzowanych/ProtokolOdbioruStatusDealer';

    /**
     * @var NaglowekType
     */
    public $Naglowek;

    /**
     * @var PoleOpisoweType
     */
    public $OpisStatusu;

    /**
     * @var DataStatusDokumentuType
     */
    public $DataStatusu;

    /**
     * @var StopkaType
     */
    public $Stopka;

    /**
     * @var string
     */
    public $StatusDokumentu;

}
