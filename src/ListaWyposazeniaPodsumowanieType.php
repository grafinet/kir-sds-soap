<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.34 Specyfikacji technicznej
 */
final class ListaWyposazeniaPodsumowanieType {

    /**
     * @var string|KwotaType $CenaPodstawowaSamochodu
     */
    public $CenaPodstawowaSamochodu;

    /**
     * @var string|KwotaType $CenaOpcjiDodatkowych
     */
    public $CenaOpcjiDodatkowych;

    /**
     * @var string|KwotaType $CenaSuma
     */
    public $CenaSuma;

    /**
     * @var string|KodWalutyType $WalutaCenyWyposazenia
     */
    public $WalutaCenyWyposazenia;

    /**
     * @var string|ZmiennaTekstowa100Type $TypCenyWyposazenia
     */
    public $TypCenyWyposazenia;

}
