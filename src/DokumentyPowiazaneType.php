<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.13 Specyfikacji technicznej
 */

final class DokumentyPowiazaneType {

    /**
     * @var IdentyfikatorPowiazaniaType $NumerUmowy
     */
    public $NumerUmowy;

    /**
     * Pole NumerOferty opcjonalne dla komunikatów 1101, 2201, 1301, dla procesów 'pojazd-standardowy' oraz 'nie-pojazd-standardowy'
     * Pole NumerOferty obowiązkowe dla komunikatu 1301, dla procesów 'pojazd-skrócony' oraz 'nie-pojazd-skrócony'
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
