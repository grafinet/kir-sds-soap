<?php

namespace pl\kir\sds\soap\TrescPisma;

use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\DaneIdentyfikacyjneZamowienieType;
use pl\kir\sds\soap\DokumentyPowiazaneType;
use pl\kir\sds\soap\DaneDostawcyType;
use pl\kir\sds\soap\DaneNabywcyType;
use pl\kir\sds\soap\DaneOdbiorcyType;
use pl\kir\sds\soap\PrzedmiotUslugaZamowienieType;
use pl\kir\sds\soap\PodsumowaniePrzedmiotuUslugaType;
use pl\kir\sds\soap\KlauzulaType;
use pl\kir\sds\soap\StopkaType;
use pl\kir\sds\soap\ZalacznikiMetadataType;

class Zamowienie extends TrescPisma
{
    public const NAMESPACE_PREFIX = 'zam';
    public const NAMESPACE_URI = 'https://www.kir.pl/SystemDokumentowStrukturyzowanych/Zamowienie';

    /**
     * @var NaglowekType
     */
    public $Naglowek;

    /**
     * @var DaneIdentyfikacyjneZamowienieType
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
     * @var PrzedmiotUslugaZamowienieType[]
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
