<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

class DanePrzedmiotuPotwierdzenieRejestracjiKonfiguracjaType {

    /**
     * @var string|ZmiennaTekstowa100Type $IloscKluczykowPilotowKart
     */
    public $IloscKluczykowPilotowKart;

    /**
     * @var string|ZmiennaTekstowa100Type $KodKluczykow
     */
    public $KodKluczykow;

    /**
     * @var string|ZmiennaTekstowa100Type $IloscZabezpieczen
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
     * @var string|ZmiennaTekstowa255Type $MiejsceOdbioruPojazdu
     */
    public $MiejsceOdbioruPojazdu;

    /**
     * @var TakNieType $Rekojmia
     */
    public $Rekojmia;

    /**
     * @var NormaEUROType $NormaEURO
     */
    public $NormaEURO;

    /**
     * @var DMC $DMC
     */
    public $DMC;

    /**
     * @var DMCZespoluType $DMCZespolu
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
     * @var string|ZmiennaTekstowa100Type $KartaPojazdu
     */
    public $KartaPojazdu;

    /**
     * @var string|ZmiennaTekstowa100Type $Homologacja
     */
    public $Homologacja;

    /**
     * @var string|int|ZmiennaLiczbowaType $PojemnoscSilnika
     */
    public $PojemnoscSilnika;

    /**
     * @var string|int|ZmiennaLiczbowaType $MocSilnika
     */
    public $MocSilnika;

    /**
     * @var string|int|ZmiennaLiczbowaType $MaksymalnaPredkosc
     */
    public $MaksymalnaPredkosc;

    /**
     * @var int $Ladownosc
     */
    public $Ladownosc;

    /**
     * @var int $Przebieg
     */
    public $Przebieg;

    /**
     * @var string $KodKoloru
     */
    public $KodKoloru;

    /**
     * @var string $NazwaKoloru
     */
    public $NazwaKoloru;

    /**
     * @var PodstawowyRodzajPaliwa $PodstawowyRodzajPaliwa
     */
    public $PodstawowyRodzajPaliwa;

    /**
     * @var AlternatywnyRodzajPaliwa[] $AlternatywnyRodzajPaliwa
     */
    public $AlternatywnyRodzajPaliwa;

    /**
     * @var string $PozostaleDaneRejestracyjne
     */
    public $PozostaleDaneRejestracyjne;

    /**
     * @var OponyRozmiarType[] $Opony
     */
    public $Opony;

}
