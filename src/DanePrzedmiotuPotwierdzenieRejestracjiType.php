<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.25 Specyfikacji technicznej
 */
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
     * Pole CzyZdefiniowanyWKryteriachPodatkowych opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyZdefiniowanyWKryteriachPodatkowych obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     *
     * @var string|TakNieType $CzyZdefiniowanyWKryteriachPodatkowych
     */
    public $CzyZdefiniowanyWKryteriachPodatkowych;

    /**
     * Pole CzyPrzedmiotRejestrowalny opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyPrzedmiotRejestrowalny obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     *
     * @var string|TakNieType $CzyPrzedmiotRejestrowalny
     */
    public $CzyPrzedmiotRejestrowalny;

    /**
     * Pole CzyPrzedmiotUprzednioZarejestrowany opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole CzyPrzedmiotUprzednioZarejestrowany obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
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
     * Pole NumerSeryjny opcjonalne dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     * Pole NumerSeryjny obowiązkowe dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     *
     * @var string|ZmiennaTekstowa100Type $NumerSeryjny
     */
    public $NumerSeryjny;

    /**
     * Pole VIN opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole VIN obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     *
     * @var string|NrVINType $VIN
     */
    public $VIN;

    /**
     * Pole RokProdukcji opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole RokProdukcji obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
     *
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
     * Pole KlasyfikacjaPodatkowa opcjonalne dla komunikatów 2502, 2601  dla procesów 'nie-pojazd-skrócony' oraz 'nie-pojazd-standardowy'
     * Pole KlasyfikacjaPodatkowa obowiązkowe dla komunikatów 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'pojazd-standardowy'
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
