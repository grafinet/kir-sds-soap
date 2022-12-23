<?php

namespace pl\kir\sds\soap\api;

class ListaWyposazeniaPodsumowanieType {

    /**
     * @var KwotaType $CenaPodstawowaSamochodu
     */
    public $CenaPodstawowaSamochodu;

    /**
     * @var KwotaType $CenaOpcjiDodatkowych
     */
    public $CenaOpcjiDodatkowych;

    /**
     * @var KwotaType $CenaSuma
     */
    public $CenaSuma;

    /**
     * @var KodWalutyType $WalutaCenyWyposazenia
     */
    public $WalutaCenyWyposazenia;

    /**
     * @var string $TypCenyWyposazenia
     */
    public $TypCenyWyposazenia;

}
