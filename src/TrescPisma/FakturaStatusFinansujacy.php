<?php

namespace pl\kir\sds\soap\TrescPisma;

use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\PoleOpisoweType;
use pl\kir\sds\soap\DataStatusDokumentuType;
use pl\kir\sds\soap\StopkaType;
use pl\kir\sds\soap\ZalacznikiMetadataType;
use pl\kir\sds\soap\ZmiennaTekstowa100Type;

class FakturaStatusFinansujacy extends TrescPisma
{
    public const NAMESPACE_PREFIX = 'fsf';
    public const NAMESPACE_URI = 'https://www.kir.pl/SystemDokumentowStrukturyzowanych/FakturaStatusFinansujacy';

    /**
     * @var string|ZmiennaTekstowa100Type
     */
    public $NumerDokumentu;

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

    /**
     * @var ZalacznikiMetadataType
     */
    public $Zalaczniki;
}
