<?php

namespace pl\kir\sds\soap;

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
