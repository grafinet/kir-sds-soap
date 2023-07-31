<?php

namespace pl\kir\sds\soap;

final class DanePrzedmiotuPotwierdzenieRejestracjiType {

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
     * @var string|TakNieType $CzyPrzedmiotZarejestrowany
     */
    public $CzyPrzedmiotZarejestrowany;

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
     * @var DanePrzedmiotuPotwierdzenieRejestracjiKonfiguracjaType $DanePrzedmiotuKonfiguracja
     */
    public $DanePrzedmiotuKonfiguracja;

    /**
     * @var ListaWyposazeniaType $ListaWyposazenia
     */
    public $ListaWyposazenia;

    /**
     * @var string|KlasyfikacjaPodatkowaType $KlasyfikacjaPodatkowa
     */
    public $KlasyfikacjaPodatkowa;

}
