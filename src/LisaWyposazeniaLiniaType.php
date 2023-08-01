<?php

namespace pl\kir\sds\soap;

final class LisaWyposazeniaLiniaType {

    /**
     * @var string|LiczbaPorzadkowaType $ListaPorzadkowa
     */
    public $ListaPorzadkowa;

    /**
     * @var string|ZmiennaTekstowa100Type $KodWyposazenia
     */
    public $KodWyposazenia;

    /**
     * @var string|ZmiennaTekstowa255Type $OpisWyposazenia
     */
    public $OpisWyposazenia;

    /**
     * @var string|KwotaType $CenaWyposazenia
     */
    public $CenaWyposazenia;

    /**
     * @var string|KodWalutyType $WalutaCenyWyposazenia
     */
    public $WalutaCenyWyposazenia;

    /**
     * @var string|ZmiennaTekstowa100Type $TypWyposazenia
     */
    public $TypWyposazenia;

}
