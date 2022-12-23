<?php

namespace pl\kir\sds\soap\api;

class DaneIdentyfikacyjneZapytanieOfertoweType {

    /**
     * @var string $NumerDokumentu
     */
    public $NumerDokumentu;

    /**
     * @var \DateTimeInterface $DataPlatnosci
     */
    public $DataPlatnosci;

    /**
     * @var \DateTimeInterface $TerminPlatnosci
     */
    public $TerminPlatnosci;

    /**
     * @var \DateTimeInterface $DataWykonaniaUslugi
     */
    public $DataWykonaniaUslugi;

    /**
     * @var \DateTimeInterface $DataWystawieniaFaktury
     */
    public $DataWystawieniaFaktury;

    /**
     * @var \DateTimeInterface $DataWaznosciDokumentu
     */
    public $DataWaznosciDokumentu;

    /**
     * @var KodWalutyType $WalutaDokumentu
     */
    public $WalutaDokumentu;

    /**
     * @var float $KursWalutowyDokumentu
     */
    public $KursWalutowyDokumentu;

    /**
     * @var \DateTimeInterface $KursDokumentuZDnia
     */
    public $KursDokumentuZDnia;

    /**
     * @var PoleOpisoweType $KomentarzDoDokumentu
     */
    public $KomentarzDoDokumentu;

    /**
     * @var string $ReferencjaKupujacego
     */
    public $ReferencjaKupujacego;

}
