<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.33 Specyfikacji technicznej
 */
final class ListaWyposazeniaLiniaType {

    /**
     * @var string|LiczbaPorzadkowaType $LiczbaPorzadkowa
     */
    public $LiczbaPorzadkowa;

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
