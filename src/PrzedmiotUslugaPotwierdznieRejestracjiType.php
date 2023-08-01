<?php

namespace pl\kir\sds\soap;

final class PrzedmiotUslugaPotwierdznieRejestracjiType
{

    /**
     * @var string|LiczbaPorzadkowaType $LiczbaPorzadkowaLinia
     */
    public $LiczbaPorzadkowaLinia;

    /**
     * @var DanePrzedmiotuPotwierdzenieRejestracjiType[] $DanePrzedmiotuLinia
     */
    public $DanePrzedmiotuLinia;

    /**
     * @var DaneUslugiType $DaneUslugiLinia
     */
    public $DaneUslugiLinia;

    /**
     * @var string|ZmiennaTekstowa100Type $SymbolPKWiULinia
     */
    public $SymbolPKWiULinia;

    /**
     * @var string|ZmiennaTekstowa100Type $RodzajStatusPojazduLinia
     */
    public $RodzajStatusPojazduLinia;

    /**
     * @var string|ZmiennaTekstowa255Type $OpisPrzedmiotuLinia
     */
    public $OpisPrzedmiotuLinia;

    /**
     * @var string|ZmiennaTekstowa100Type $JednostkaNaLinii
     */
    public $JednostkaNaLinii;

    /**
     * @var int|string|IloscNaLiniiType $IloscNaLinii
     */
    public $IloscNaLinii;

    /**
     * @var string|KwotaJednostkowaNettoLinia $KwotaJednostkowaNettoLinia
     */
    public $KwotaJednostkowaNettoLinia;

    /**
     * @var string|KwotaType $KwotaNettoLinia
     */
    public $KwotaNettoLinia;

    /**
     * @var int $RabatLinia
     */
    public $RabatLinia;

    /**
     * @var string|StawkaPodatkuVATLiniaType $StawkaPodatkuVATLinia
     */
    public $StawkaPodatkuVATLinia;

    /**
     * @var string|KwotaType $PodatekVATLinia
     */
    public $PodatekVATLinia;

    /**
     * @var string|KwotaType $KwotaBruttoLinia
     */
    public $KwotaBruttoLinia;

}
