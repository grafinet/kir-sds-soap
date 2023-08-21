<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

final class DanePrzedmiotuZapytanieKonfiguracjaType {

    /**
     * @var string|ZmiennaTekstowa100Type $IloscKluczykowPilotowKart
     */
    public $IloscKluczykowPilotowKart;

    /**
     * @var string|ZmiennaTekstowa100Type $KodKluczykow
     */
    public $KodKluczykow;

    /**
     * @var int|ZmiennaLiczbowaNieujemnaType $IloscZabezpieczen
     */
    public $IloscZabezpieczen;

    /**
     * @var DateTimeInterface $DataPierwszejRejestracjiWKraju
     */
    public $DataPierwszejRejestracjiWKraju;

    /**
     * @var string|ZmiennaTekstowa100Type $MiejsceRejestracjiPojazdu
     */
    public $MiejsceRejestracjiPojazdu;

    /**
     * @var string|ZmiennaTekstowa100Type $DataWaznosciOC
     */
    public $DataWaznosciOC;

    /**
     * @var string|ZmiennaTekstowa100Type $MiejsceOdbioruPojazdu
     */
    public $MiejsceOdbioruPojazdu;

    /**
     * @var string|TakNieType $Rekojmia
     */
    public $Rekojmia;

    /**
     * @var string|NormaEUROType $NormaEURO
     */
    public $NormaEURO;

    /**
     * @var string|ZmiennaTekstowa255Type $DMC
     */
    public $DMC;

    /**
     * @var string|ZmiennaTekstowa255Type $DMCZespolu
     */
    public $DMCZespolu;

    /**
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaOsi
     */
    public $LiczbaOsi;

    /**
     * @var int|string|ZmiennaLiczbowaDodatniaType $LiczbaMiejsc
     */
    public $LiczbaMiejsc;

    /**
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
     * @var string|ZmiennaTekstowa100Type $NumerRejestracyjny
     */
    public $NumerRejestracyjny;

    /**
     * @var string|ZmiennaTekstowa100Type $KodProducenta
     */
    public $KodProducenta;

    /**
     * @var string|ZmiennaTekstowa100Type $NumerSilnika
     */
    public $NumerSilnika;

    /**
     * @var string|ZmiennaTekstowa100Type $Homologacja
     */
    public $Homologacja;

    /**
     * @var int|string|ZmiennaLiczbowaType $PojemnoscSilnika
     */
    public $PojemnoscSilnika;

    /**
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
