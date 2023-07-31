<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

final class DaneIdentyfikacyjneZapytanieOfertoweType {

    /**
     * @var string|ZmiennaTekstowa100Type $NumerDokumentu
     */
    public $NumerDokumentu;

    /**
     * @var DateTimeInterface $DataPlatnosci
     */
    public $DataPlatnosci;

    /**
     * @var DateTimeInterface $TerminPlatnosci
     */
    public $TerminPlatnosci;

    /**
     * @var DateTimeInterface $DataWykonaniaUslugi
     */
    public $DataWykonaniaUslugi;

    /**
     * @var DateTimeInterface $DataWystawieniaFaktury
     */
    public $DataWystawieniaFaktury;

    /**
     * @var DateTimeInterface $DataWaznosciDokumentu
     */
    public $DataWaznosciDokumentu;

    /**
     * @var string|KodWalutyType $WalutaDokumentu
     */
    public $WalutaDokumentu;

    /**
     * @var float|string|KursWalutowyDokumentuType $KursWalutowyDokumentu
     */
    public $KursWalutowyDokumentu;

    /**
     * @var DateTimeInterface $KursDokumentuZDnia
     */
    public $KursDokumentuZDnia;

    /**
     * @var string|PoleOpisoweType $KomentarzDoDokumentu
     */
    public $KomentarzDoDokumentu;

    /**
     * @var string|ZmiennaTekstowa255Type $ReferencjaKupujacego
     */
    public $ReferencjaKupujacego;

}
