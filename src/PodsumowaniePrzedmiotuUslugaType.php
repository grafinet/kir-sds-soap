<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

/**
 * Sekcja opisana w rozdziale 7.27 Specyfikacji technicznej
 */
final class PodsumowaniePrzedmiotuUslugaType {

    /**
     * @var string|KwotaType $KwotaNettoPodsumowanie
     */
    public $KwotaNettoPodsumowanie;

    /**
     * @var string|KwotaType $PodatekVATPodsumowanie
     */
    public $PodatekVATPodsumowanie;

    /**
     * @var string|KwotaType $KwotaBruttoPodsumowanie
     */
    public $KwotaBruttoPodsumowanie;

    /**
     * @var string|ZmiennaTekstowa255Type $SlownieWartoscFakturydoZaplaty
     */
    public $SlownieWartoscFakturydoZaplaty;

    /**
     * @var DateTimeInterface $TerminPlatnosci
     */
    public $TerminPlatnosci;

    /**
     * @var string|ZmiennaTekstowa100Type $SposobRodzajPlatnosci
     */
    public $SposobRodzajPlatnosci;

    /**
     * @var string|KwotaType $KwotaZaliczki
     */
    public $KwotaZaliczki;

    /**
     * @var string|KodWalutyType $WalutaZaliczki
     */
    public $WalutaZaliczki;

    /**
     * @var string|ZmiennaTekstowa255Type $WplacajacyZaliczke
     */
    public $WplacajacyZaliczke;

    /**
     * @var DateTimeInterface $DataZaliczki
     */
    public $DataZaliczki;

    /**
     * @var string|KwotaType $PozostalaKwotaDoZaplaty
     */
    public $PozostalaKwotaDoZaplaty;

    /**
     * @var string|KwotaType $OgolnyRabatNaDokumencie
     */
    public $OgolnyRabatNaDokumencie;

}
