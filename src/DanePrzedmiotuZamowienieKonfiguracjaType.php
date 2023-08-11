<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

/**
 * Sekcja opisana w rozdziale 7.28 Specyfikacji technicznej
 */
final class DanePrzedmiotuZamowienieKonfiguracjaType {

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
     * Pole DataPierwszejRejestracjiWKraju opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole DataPierwszejRejestracjiWKraju warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var DateTimeInterface $DataPierwszejRejestracjiWKraju
     */
    public $DataPierwszejRejestracjiWKraju;

    /**
     * Pole MiejsceRejestracjiPojazdu opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole MiejsceRejestracjiPojazdu warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var string|ZmiennaTekstowa100Type $MiejsceRejestracjiPojazdu
     */
    public $MiejsceRejestracjiPojazdu;

    /**
     * Pole DataWaznosciOC opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole DataWaznosciOC warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var string|ZmiennaTekstowa100Type $DataWaznosciOC
     */
    public $DataWaznosciOC;

    /**
     * Pole Rekojmia opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole Rekojmia warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var string|TakNieType $Rekojmia
     */
    public $Rekojmia;

    /**
     * Pole NormaEURO opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole NormaEURO warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744 lub 746
     *
     * @var string|NormaEUROType $NormaEURO
     */
    public $NormaEURO;

    /**
     * Pole DMC opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole DMC obowiązkowe dla komunikatów 1101, 2201  dla procesu 'pojazd-standardowy'
     *
     * @var string|ZmiennaTekstowa255Type $DMC
     */
    public $DMC;

    /**
     * Pole DMCZespolu opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole DMCZespolu warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 746, 747 lub 748
     *
     * @var string|ZmiennaTekstowa255Type $DMCZespolu
     */
    public $DMCZespolu;

    /**
     * Pole LiczbaOsi opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole LiczbaOsi warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek:  Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744, 746, 747 lub 748
     *
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaOsi
     */
    public $LiczbaOsi;

    /**
     * Pole LiczbaMiejsc opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole LiczbaMiejsc warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 744
     *
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaMiejsc
     */
    public $LiczbaMiejsc;

    /**
     * Pole Zawieszenie opcjonalne dla komunikatów 1101, 2201  dla procesu 'nie-pojazd-standardowy'
     * Pole Zawieszenie warunkowe dla komunikatów 1101, 2201 dla procesu 'pojazd-standardowy'
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744, 746, 747 lub 748
     *
     * @var string|ZawieszenieType $Zawieszenie
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
     * Pole NumerRejestracyjny opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-standardowy', 'nie-pojazd-skrócony'
     * Pole NumerRejestracyjny opcjonalne dla komunikatów 1301, 2401  dla procesu 'pojazd-skrócony'
     * Pole NumerRejestracyjny warunkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy' oraz dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”.
     *
     * @var string|ZmiennaTekstowa100Type $NumerRejestracyjny
     */
    public $NumerRejestracyjny;

    /**
     * @var string|ZmiennaTekstowa100Type $DedykowanyNumerRejestracyjny
     */
    public $DedykowanyNumerRejestracyjny;

    /**
     * @var string|ZmiennaTekstowa100Type $KsztaltTablicRejestracyjnych
     */
    public $KsztaltTablicRejestracyjnych;

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
     * Pole Homologacja opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-standardowy', 'nie-pojazd-skrócony'
     * Pole Homologacja opcjonalne dla komunikatów 1301, 2401  dla procesu 'pojazd-skrócony'
     * Pole Homologacja warunkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy' oraz dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Warunek: wartość elementu /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/CzyPrzedmiotUprzednioZarejestrowany jest równa „Tak”
     *
     * @var string|ZmiennaTekstowa100Type $Homologacja
     */
    public $Homologacja;

    /**
     * Pole PojemnoscSilnika opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-standardowy', 'nie-pojazd-skrócony'
     * Pole PojemnoscSilnika opcjonalne dla komunikatów 1301, 2401  dla procesu 'pojazd-skrócony'
     * Pole PojemnoscSilnika warunkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy' oraz dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Warunek: element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     *
     * @var int|string|ZmiennaLiczbowaType $PojemnoscSilnika
     */
    public $PojemnoscSilnika;

    /**
     * Pole MocSilnika opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-standardowy', 'nie-pojazd-skrócony'
     * Pole MocSilnika opcjonalne dla komunikatów 1301, 2401  dla procesu 'pojazd-skrócony'
     * Pole MocSilnika warunkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy' oraz dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Warunek: element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/PodstawowyRodzajPaliwa
     * lub element
     * /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/DanePrzedmiotuKonfiguracja/AlternatywnyRodzajPaliwa
     * przyjęły jedną z wartości: „P”, „D”, „M”, „LPG”, „CNG”, „LNG”, „BD”, „E85”
     *
     * @var int|string|ZmiennaLiczbowaType $MocSilnika
     */
    public $MocSilnika;

    /**
     * @var int|string|ZmiennaLiczbowaType $MaksymalnaPredkosc
     */
    public $MaksymalnaPredkosc;

    /**
     * @var int|string|ZmiennaLiczbowaType $Ladownosc
     */
    public $Ladownosc;

    /**
     * @var int|string|ZmiennaLiczbowaType $Przebieg
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
     * Pole PodstawowyRodzajPaliwa opcjonalne dla komunikatów 1301, 2401, 2501  dla procesów 'nie-pojazd-standardowy', 'nie-pojazd-skrócony'
     * Pole PodstawowyRodzajPaliwa opcjonalne dla komunikatów 1301, 2401  dla procesu 'pojazd-skrócony'
     * Pole PodstawowyRodzajPaliwa warunkowe dla komunikatów 1301, 2401, 2501 dla procesu 'pojazd-standardowy' oraz dla komunikatu 2501 dla procesu 'pojazd-skrócony'
     * Warunek: Element /eKomunikat/TrescKomunikatu/PrzedmiotUsługa/DanePrzedmiotuLinia/KlasyfikacjaPodatkowa ma wartość 740, 741, 742, 744 lub 746
     *
     * @var string|RodzajPaliwaType $PodstawowyRodzajPaliwa
     */
    public $PodstawowyRodzajPaliwa;

    /**
     * @var string[]|RodzajPaliwaType[] $AlternatywnyRodzajPaliwa
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
