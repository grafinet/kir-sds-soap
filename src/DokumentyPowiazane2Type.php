<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.14 Specyfikacji technicznej
 */
final class DokumentyPowiazane2Type {

    /**
     * @var IdentyfikatorPowiazaniaType $NumerUmowy
     */
    public $NumerUmowy;

    /**
     * @var IdentyfikatorPowiazaniaType $NumerZamowienia
     */
    public $NumerZamowienia;

    /**
     * Pole NumerOferty opcjonalne dla komunikatów 2401, 2501, 2502, 2601  dla procesów 'pojazd-standardowy' oraz 'nie-pojazd-standardowy'
     * Pole NumerOferty obowiązkowe dla komunikatów 2401, 2501, 2502, 2601  dla procesów 'pojazd-skrócony' oraz 'nie-pojazd-skrócony'
     *
     * @var IdentyfikatorPowiazaniaType $NumerOferty
     */
    public $NumerOferty;

    /**
     * @var IdentyfikatorPowiazaniaType $NumerPotwierdzenia
     */
    public $NumerPotwierdzenia;

    /**
     * @var IdentyfikatorPowiazaniaType[] $InnyDokument
     */
    public $InnyDokument;

}
