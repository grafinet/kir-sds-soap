<?php

namespace pl\kir\sds\soap\api;

class DaneIdentyfikacyjneZamowienieType {

    /**
     * @var string $NumerDokumentu
     */
    public $NumerDokumentu;

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
     * @var string $KursWalutowyDokumentu
     */
    public $KursWalutowyDokumentu;

    /**
     * @var \DateTimeInterface $KursDokumentuZDnia
     */
    public $KursDokumentuZDnia;

    /**
     * @var string $RodzajKursuDokumentuWaluty
     */
    public $RodzajKursuDokumentuWaluty;

    /**
     * @var KodWalutyType $WalutaPlatnosci
     */
    public $WalutaPlatnosci;

    /**
     * @var string $KursWalutowyPlatnosci
     */
    public $KursWalutowyPlatnosci;

    /**
     * @var \DateTimeInterface $KursPlatnosciZDnia
     */
    public $KursPlatnosciZDnia;

    /**
     * @var string $RodzajKursuPlatnosciWaluty
     */
    public $RodzajKursuPlatnosciWaluty;

    /**
     * @var KodWalutyType $KodWalutyPodatkuVAT
     */
    public $KodWalutyPodatkuVAT;

    /**
     * @var \DateTimeInterface $DataPowstaniaZobowazaniaPodatkowego
     */
    public $DataPowstaniaZobowazaniaPodatkowego;

    /**
     * @var \DateTimeInterface $DataPowstaniaOkresuFakturowania
     */
    public $DataPowstaniaOkresuFakturowania;

    /**
     * @var \DateTimeInterface $DataKoncaOkresuFakturowania
     */
    public $DataKoncaOkresuFakturowania;

    /**
     * @var PoleOpisoweType $KomentarzDoDokumentu
     */
    public $KomentarzDoDokumentu;

    /**
     * @var string $ReferencjaKupujacego
     */
    public $ReferencjaKupujacego;

}
