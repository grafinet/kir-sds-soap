<?php

namespace pl\kir\sds\soap;

class DanePrzedmiotuZapytanieType {

    /**
     * @var string $LiczbaPorzadkowaPrzedmiotu
     */
    public $LiczbaPorzadkowaPrzedmiotu;

    /**
     * @var TakNieType $CzyPojazd
     */
    public $CzyPojazd;

    /**
     * @var TakNieType $ZdefiniowanyWKryteriachPodatkowych
     */
    public $ZdefiniowanyWKryteriachPodatkowych;

    /**
     * @var TakNieType $CzyPrzedmiotRejestrowalny
     */
    public $CzyPrzedmiotRejestrowalny;

    /**
     * @var TakNieType $CzyPrzedmiotUprzednioZarejestrowany
     */
    public $CzyPrzedmiotUprzednioZarejestrowany;

    /**
     * @var string $Marka
     */
    public $Marka;

    /**
     * @var string $Model
     */
    public $Model;

    /**
     * @var string $Typ
     */
    public $Typ;

    /**
     * @var string $NumerSeryjny
     */
    public $NumerSeryjny;

    /**
     * @var NrVINType $VIN
     */
    public $VIN;

    /**
     * @var string $RokProdukcji
     */
    public $RokProdukcji;

    /**
     * @var DanePrzedmiotuZapytanieKonfiguracjaType $DanePrzedmiotuKonfiguracja
     */
    public $DanePrzedmiotuKonfiguracja;

    /**
     * @var ListaWyposazeniaType $ListaWyposazenia
     */
    public $ListaWyposazenia;

    /**
     * @var KlasyfikacjaPodatkowaType $KlasyfikacjaPodatkowa
     */
    public $KlasyfikacjaPodatkowa;

}
