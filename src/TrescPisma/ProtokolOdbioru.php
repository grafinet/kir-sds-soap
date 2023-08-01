<?php

namespace pl\kir\sds\soap\TrescPisma;

use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\DaneIdentyfikacyjneProtokolOdbioruType;
use pl\kir\sds\soap\DokumentyPowiazane2Type;
use pl\kir\sds\soap\DaneDostawcyType;
use pl\kir\sds\soap\DaneNabywcyType;
use pl\kir\sds\soap\DaneOdbiorcyType;
use pl\kir\sds\soap\PrzedmiotUslugaPotwierdznieRejestracjiType;
use pl\kir\sds\soap\PodsumowaniePrzedmiotuUslugaType;
use pl\kir\sds\soap\KlauzulaType;
use pl\kir\sds\soap\StopkaType;
use pl\kir\sds\soap\ZalacznikiMetadataType;

class ProtokolOdbioru extends TrescPisma
{
    public const NAMESPACE_PREFIX = 'po';
    public const NAMESPACE_URI = 'https://www.kir.pl/SystemDokumentowStrukturyzowanych/ProtokolOdbioru';

    /**
     * @var NaglowekType
     */
    public $Naglowek;

    /**
     * @var DaneIdentyfikacyjneProtokolOdbioruType
     */
    public $DaneIdentyfikacyjne;

    /**
     * @var DokumentyPowiazane2Type
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
     * @var PrzedmiotUslugaPotwierdznieRejestracjiType[]
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
