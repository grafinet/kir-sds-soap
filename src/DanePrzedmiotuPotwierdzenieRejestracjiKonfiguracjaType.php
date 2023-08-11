<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

/**
 * Sekcja opisana w rozdziale 7.30 Specyfikacji technicznej
 */
final class DanePrzedmiotuPotwierdzenieRejestracjiKonfiguracjaType {

    /**
     * @var string|ZmiennaTekstowa100Type $IloscKluczykowPilotowKart
     */
    public $IloscKluczykowPilotowKart;

    /**
     * @var string|ZmiennaTekstowa100Type $KodKluczykow
     */
    public $KodKluczykow;

    /**
     * @var string|ZmiennaLiczbowaNieujemnaType $IloscZabezpieczen
     */
    public $IloscZabezpieczen;

    /**
     * Pole DataPierwszejRejestracjiWKraju opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole DataPierwszejRejestracjiWKraju obowiązkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     *
     * @var DateTimeInterface $DataPierwszejRejestracjiWKraju
     */
    public $DataPierwszejRejestracjiWKraju;

    /**
     * Pole MiejsceRejestracjiPojazdu opcjonalne dla komunikatów 2502, 2601 dla procesów  'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole MiejsceRejestracjiPojazdu obowiązkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     *
     * @var string|ZmiennaTekstowa100Type $MiejsceRejestracjiPojazdu
     */
    public $MiejsceRejestracjiPojazdu;

    /**
     * Pole DataWaznosciOC opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole DataWaznosciOC obowiązkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     *
     * @var string|ZmiennaTekstowa100Type $DataWaznosciOC
     */
    public $DataWaznosciOC;

    /**
     * @var string|ZmiennaTekstowa255Type $MiejsceOdbioruPojazdu
     */
    public $MiejsceOdbioruPojazdu;

    /**
     * @var TakNieType $Rekojmia
     */
    public $Rekojmia;

    /**
     * Pole NormaEURO opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole NormaEURO warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek: element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     * Warunek:        Element        /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744 lub 746
     *
     * @var NormaEUROType $NormaEURO
     */
    public $NormaEURO;

    /**
     * Pole DMC opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole DMC obowiązkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     *
     * @var ZmiennaTekstowa255Type $DMC
     */
    public $DMC;

    /**
     * Pole DMCZespołu opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole DMCZespołu warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:        Element        /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 746, 747 lub 748
     *
     * @var ZmiennaTekstowa255Type $DMCZespolu
     */
    public $DMCZespolu;

    /**
     * Pole LiczbaOsi opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole LiczbaOsi warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:        Element        /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744, 746, 747 lub 748
     *
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaOsi
     */
    public $LiczbaOsi;

    /**
     * Pole LiczbaMiejsc opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole LiczbaMiejsc warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 744
     *
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaMiejsc
     */
    public $LiczbaMiejsc;

    /**
     * Pole Zawieszenie opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole Zawieszenie warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:        Element        /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744, 746, 747 lub 748
     *
     * @var ZawieszenieType $Zawieszenie
     */
    public $Zawieszenie;

    /**
     * @var string|ZmiennaTekstowa100Type $RodzajNadwozia
     */
    public $RodzajNadwozia;

    /**
     * @var string|ZmiennaTekstowa100Type $NumerEwidencyjny
     */
    public $NumerEwidencyjny;

    /**
     * Pole NumerRejestracyjny opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole NumerRejestracyjny obowiązkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     *
     * @var string|ZmiennaTekstowa100Type $NumerRejestracyjny
     */
    public $NumerRejestracyjny;

    /**
     * @var string|ZmiennaTekstowa100Type $KodProducenta
     */
    public $KodProducenta;

    /**
     * @var string|ZmiennaTekstowa100Type $EuroKod
     */
    public $EuroKod;

    /**
     * @var string|ZmiennaTekstowa100Type $NumerSilnika
     */
    public $NumerSilnika;

    /**
     * Pole Homologacja opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole Homologacja warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/ CzyPrzedmiotUprzednioZarejestrowany jest równa „Nie”
     *
     * @var string|ZmiennaTekstowa100Type $Homologacja
     */
    public $Homologacja;

    /**
     * Pole PojemnoscSilnika opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole PojemnoscSilnika warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:  element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     *
     * @var string|int|ZmiennaLiczbowaType $PojemnoscSilnika
     */
    public $PojemnoscSilnika;

    /**
     * Pole MocSilnika opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole MocSilnika warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:  element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     *
     * @var string|int|ZmiennaLiczbowaType $MocSilnika
     */
    public $MocSilnika;

    /**
     * @var string|int|ZmiennaLiczbowaType $MaksymalnaPredkosc
     */
    public $MaksymalnaPredkosc;

    /**
     * @var string|int|ZmiennaLiczbowaType $Ladownosc
     */
    public $Ladownosc;

    /**
     * @var string|int|ZmiennaLiczbowaType $Przebieg
     */
    public $Przebieg;

    /**
     * @var string|ZmiennaTekstowa100Type $KodKoloru
     */
    public $KodKoloru;

    /**
     * @var string|ZmiennaTekstowa100Type $NazwaKoloru
     */
    public $NazwaKoloru;

    /**
     * Pole PodstawowyRodzajPaliwa opcjonalne dla komunikatów 2502, 2601 dla procesów 'nie-pojazd-standardowy' i 'nie-pojazd-skrócony'
     * Pole PodstawowyRodzajPaliwa warunkowe dla komunikatów 2502, 2601 dla procesów 'pojazd-standardowy' i 'pojazd-skrócony'
     * Warunek:        Element        /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744 lub 746
     *
     * @var string|RodzajPaliwaType $PodstawowyRodzajPaliwa
     */
    public $PodstawowyRodzajPaliwa;

    /**
     * @var RodzajPaliwaType[] $AlternatywnyRodzajPaliwa
     */
    public $AlternatywnyRodzajPaliwa;

    /**
     * @var string|ZmiennaTekstowa255Type $PozostaleDaneRejestracyjne
     */
    public $PozostaleDaneRejestracyjne;

    /**
     * @var OponyRozmiarType[] $Opony
     */
    public $Opony;

}
