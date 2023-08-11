<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.24 Specyfikacji technicznej
 */
final class DanePrzedmiotuZamowienieType {

    /**
     * @var string|LiczbaPorzadkowaType $LiczbaPorzadkowaPrzedmiotu
     */
    public $LiczbaPorzadkowaPrzedmiotu;

    /**
     * @var string|TakNieType $CzyPojazd
     */
    public $CzyPojazd;

    /**
     * Pole CzyZdefiniowanyWKryteriachPodatkowych opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyZdefiniowanyWKryteriachPodatkowych opcjonalne dla komunikatów 1301, 2401  oraz obowiązkowe dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Pole CzyZdefiniowanyWKryteriachPodatkowych obowiązkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy'
     *
     * @var string|TakNieType $CzyZdefiniowanyWKryteriachPodatkowych
     */
    public $CzyZdefiniowanyWKryteriachPodatkowych;

    /**
     * Pole CzyPrzedmiotRejestrowalny opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyPrzedmiotRejestrowalny opcjonalne dla komunikatów 1301, 2401  oraz obowiązkowe dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Pole CzyPrzedmiotRejestrowalny obowiązkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy'
     *
     * @var string|TakNieType $CzyPrzedmiotRejestrowalny
     */
    public $CzyPrzedmiotRejestrowalny;

    /**
     * Pole CzyPrzedmiotUprzednioZarejestrowany opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyPrzedmiotUprzednioZarejestrowany opcjonalne dla komunikatów 1301, 2401  oraz obowiązkowe dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Pole CzyPrzedmiotUprzednioZarejestrowany obowiązkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy'
     *
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
     * Pole NumerSeryjny opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     * Pole NumerSeryjny opcjonalne dla komunikatów 1301, 2401 oraz obowiązkowe dla komunikatu 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     *
     * @var string|ZmiennaTekstowa100Type $NumerSeryjny
     */
    public $NumerSeryjny;

    /**
     * Pole VIN opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole VIN opcjonalne dla komunikatów 1301, 2401 oraz obowiązkowe dla komunikatu 2501  dla procesu 'pojazd-skrócony'
     * Pole VIN obowiązkowe dla komunikatu 2501  dla procesu 'pojazd-standardowy' oraz warunkowe dla komunikatów 1301, 2401 dla procesu 'pojazd-standardowy'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var string|NrVINType $VIN
     */
    public $VIN;

    /**
     * Pole RokProdukcji opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole RokProdukcji opcjonalne dla komunikatów 1301, 2401  oraz obowiązkowe dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Pole RokProdukcji obowiązkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy'
     *
     * @var string|RokProdukcjiType $RokProdukcji
     */
    public $RokProdukcji;

    /**
     * @var DanePrzedmiotuZamowienieKonfiguracjaType $DanePrzedmiotuKonfiguracja
     */
    public $DanePrzedmiotuKonfiguracja;

    /**
     * @var ListaWyposazeniaType $ListaWyposazenia
     */
    public $ListaWyposazenia;

    /**
     * Pole KlasyfikacjaPodatkowa opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole KlasyfikacjaPodatkowa opcjonalne dla komunikatów 1301, 2401  oraz obowiązkowe dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Pole KlasyfikacjaPodatkowa obowiązkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy'
     *
     * @var string|KlasyfikacjaPodatkowaType $KlasyfikacjaPodatkowa
     */
    public $KlasyfikacjaPodatkowa;

    /**
     * @var ZmiennaTekstowa100Type $LiczbaOsiNapedowych
     */
    public $LiczbaOsiNapedowych;

    /**
     * @var ZmiennaTekstowa100Type $NumerPolisyZbywcy
     */
    public $NumerPolisyZbywcy;

    /**
     * @var ZmiennaTekstowa100Type $EmisjaCO2
     */
    public $EmisjaCO2;

    /**
     * @var ZmiennaTekstowa100Type $MocPrzedmiotu
     */
    public $MocPrzedmiotu;
}
