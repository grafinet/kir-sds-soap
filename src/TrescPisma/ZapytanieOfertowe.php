<?php

namespace pl\kir\sds\soap\TrescPisma;

use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\DaneIdentyfikacyjneZapytanieOfertoweType;
use pl\kir\sds\soap\DokumentyPowiazaneType;
use pl\kir\sds\soap\DaneDostawcyType;
use pl\kir\sds\soap\DaneNabywcyType;
use pl\kir\sds\soap\DaneOdbiorcyType;
use pl\kir\sds\soap\PrzedmiotUslugaZapytanieType;
use pl\kir\sds\soap\PodsumowaniePrzedmiotuUslugaType;
use pl\kir\sds\soap\KlauzulaType;
use pl\kir\sds\soap\StopkaType;
use pl\kir\sds\soap\ZalacznikiMetadataType;

class ZapytanieOfertowe extends TrescPisma
{
    public const NAMESPACE_PREFIX = 'zo';
    public const NAMESPACE_URI = 'https://www.kir.pl/SystemDokumentowStrukturyzowanych/ZapytanieOfertowe';

    /**
     * @var NaglowekType
     */
    public $Naglowek;

    /**
     * @var DaneIdentyfikacyjneZapytanieOfertoweType
     */
    public $DaneIdentyfikacyjne;

    /**
     * @var DokumentyPowiazaneType
     */
    public $DokumentyPowiazane;

    /**
     * @var DaneDostawcyType[]
     */
    public $DaneDostawcy;

    /**
     * @var DaneNabywcyType[]
     */
    public $DaneNabywcy;

    /**
     * @var DaneOdbiorcyType[]
     */
    public $DaneOdbiorcy;

    /**
     * @var PrzedmiotUslugaZapytanieType[]
     */
    public $PrzedmiotUsluga;

    /**
     * @var PodsumowaniePrzedmiotuUslugaType
     */
    public $Podsumowanie;

    /**
     * @var KlauzulaType[]
     */
    public $Klauzule;

    /**
     * @var StopkaType
     */
    public $Stopka;

    /**
     * @var ZalacznikiMetadataType
     */
    public $Zalaczniki;

}
