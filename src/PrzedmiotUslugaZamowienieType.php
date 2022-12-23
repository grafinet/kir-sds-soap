<?php

namespace pl\kir\sds\soap\api;

class PrzedmiotUslugaZamowienieType {

    /**
     * @var string $LiczbaPorzadkowaLinia
     */
    public $LiczbaPorzadkowaLinia;

    /**
     * @var DanePrzedmiotuZamowienieType[] $DanePrzedmiotuLinia
     */
    public $DanePrzedmiotuLinia;

    /**
     * @var DaneUslugiType $DaneUslugiLinia
     */
    public $DaneUslugiLinia;

    /**
     * @var string $SymbolPKWiULinia
     */
    public $SymbolPKWiULinia;

    /**
     * @var string $RodzajStatusPojazduLinia
     */
    public $RodzajStatusPojazduLinia;

    /**
     * @var string $OpisPrzedmiotuLinia
     */
    public $OpisPrzedmiotuLinia;

    /**
     * @var string $JednostkaNaLinii
     */
    public $JednostkaNaLinii;

    /**
     * @var IloscNaLiniiType $IloscNaLinii
     */
    public $IloscNaLinii;

    /**
     * @var KwotaJednostkowaNettoLinia $KwotaJednostkowaNettoLinia
     */
    public $KwotaJednostkowaNettoLinia;

    /**
     * @var KwotaType $KwotaNettoLinia
     */
    public $KwotaNettoLinia;

    /**
     * @var int $RabatLinia
     */
    public $RabatLinia;

    /**
     * @var StawkaPodatkuVATLiniaType $StawkaPodatkuVATLinia
     */
    public $StawkaPodatkuVATLinia;

    /**
     * @var KwotaType $PodatekVATLinia
     */
    public $PodatekVATLinia;

    /**
     * @var KwotaType $KwotaBruttoLinia
     */
    public $KwotaBruttoLinia;

}
