<?php

namespace pl\kir\sds\soap\api;

class PodsumowaniePrzedmiotuUslugaType {

    /**
     * @var KwotaType $KwotaNettoPodsumowanie
     */
    public $KwotaNettoPodsumowanie;

    /**
     * @var KwotaType $PodatekVATPodsumowanie
     */
    public $PodatekVATPodsumowanie;

    /**
     * @var KwotaType $KwotaBruttoPodsumowanie
     */
    public $KwotaBruttoPodsumowanie;

    /**
     * @var string $SlownieWartoscFakturydoZaplaty
     */
    public $SlownieWartoscFakturydoZaplaty;

    /**
     * @var \DateTimeInterface $TerminPlatnosci
     */
    public $TerminPlatnosci;

    /**
     * @var string $SposobRodzajPlatnosci
     */
    public $SposobRodzajPlatnosci;

    /**
     * @var KwotaType $KwotaZaliczki
     */
    public $KwotaZaliczki;

    /**
     * @var KodWalutyType $WalutaZaliczki
     */
    public $WalutaZaliczki;

    /**
     * @var string $WplacajacyZaliczke
     */
    public $WplacajacyZaliczke;

    /**
     * @var \DateTimeInterface $DataZaliczki
     */
    public $DataZaliczki;

    /**
     * @var KwotaType $PozostalaKwotaDoZaplaty
     */
    public $PozostalaKwotaDoZaplaty;

    /**
     * @var KwotaType $OgolnyRabatNaDokumencie
     */
    public $OgolnyRabatNaDokumencie;

}
