<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

final class DaneIdentyfikacyjneProtokolOdbioruType {

    /**
     * @var string|ZmiennaTekstowa100Type $NumerDokumentu
     */
    public $NumerDokumentu;

    /**
     * @var DateTimeInterface $TerminPlatnosci
     */
    public $TerminPlatnosci;

    /**
     * @var DateTimeInterface $DataWykonaniaUslugi
     */
    public $DataWykonaniaUslugi;

    /**
     * @var TakNieType $CzyKlientOdebral
     */
    public $CzyKlientOdebral;

    /**
     * @var DateTimeInterface $DataWystawieniaFaktury
     */
    public $DataWystawieniaFaktury;

    /**
     * @var DateTimeInterface $DataWaznosciDokumentu
     */
    public $DataWaznosciDokumentu;

    /**
     * @var KodWalutyType $WalutaDokumentu
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
     * @var string|ZmiennaTekstowa255Type $RodzajKursuDokumentuWaluty
     */
    public $RodzajKursuDokumentuWaluty;

    /**
     * @var KodWalutyType $WalutaPlatnosci
     */
    public $WalutaPlatnosci;

    /**
     * @var string|ZmiennaTekstowa255Type $KursWalutowyPlatnosci
     */
    public $KursWalutowyPlatnosci;

    /**
     * @var DateTimeInterface $KursPlatnosciZDnia
     */
    public $KursPlatnosciZDnia;

    /**
     * @var string|ZmiennaTekstowa255Type $RodzajKursuPlatnosciWaluty
     */
    public $RodzajKursuPlatnosciWaluty;

    /**
     * @var string|KodWalutyType $KodWalutyPodatkuVAT
     */
    public $KodWalutyPodatkuVAT;

    /**
     * @var DateTimeInterface $DataPowstaniaZobowazaniaPodatkowego
     */
    public $DataPowstaniaZobowazaniaPodatkowego;

    /**
     * @var DateTimeInterface $DataPowstaniaOkresuFakturowania
     */
    public $DataPowstaniaOkresuFakturowania;

    /**
     * @var DateTimeInterface $DataKoncaOkresuFakturowania
     */
    public $DataKoncaOkresuFakturowania;

    /**
     * @var string|PoleOpisoweType $KomentarzDoDokumentu
     */
    public $KomentarzDoDokumentu;

    /**
     * @var string|ZmiennaTekstowa255Type $ReferencjaKupujacego
     */
    public $ReferencjaKupujacego;

}
