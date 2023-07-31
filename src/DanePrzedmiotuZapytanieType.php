<?php

namespace pl\kir\sds\soap;

final class DanePrzedmiotuZapytanieType {

    /**
     * @var string|LiczbaPorzadkowaType $LiczbaPorzadkowaPrzedmiotu
     */
    public $LiczbaPorzadkowaPrzedmiotu;

    /**
     * @var string|TakNieType $CzyPojazd
     */
    public $CzyPojazd;

    /**
     * @var string|TakNieType $ZdefiniowanyWKryteriachPodatkowych
     */
    public $ZdefiniowanyWKryteriachPodatkowych;

    /**
     * @var string|TakNieType $CzyPrzedmiotRejestrowalny
     */
    public $CzyPrzedmiotRejestrowalny;

    /**
     * @var string|TakNieType $CzyPrzedmiotUprzednioZarejestrowany
     */
    public $CzyPrzedmiotUprzednioZarejestrowany;

    /**
     * @var string|ZmiennaTekstowa100Type $Marka
     */
    public $Marka;

    /**
     * @var string|ZmiennaTekstowa100Type $Model
     */
    public $Model;

    /**
     * @var string|ZmiennaTekstowa100Type $Typ
     */
    public $Typ;

    /**
     * @var string|ZmiennaTekstowa100Type $NumerSeryjny
     */
    public $NumerSeryjny;

    /**
     * @var string|NrVINType $VIN
     */
    public $VIN;

    /**
     * @var string|RokProdukcjiType $RokProdukcji
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
