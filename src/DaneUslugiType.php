<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.26 Specyfikacji technicznej
 */
final class DaneUslugiType {

    /**
     * @var string|ZmiennaTekstowa255Type $NazwaUslugi
     */
    public $NazwaUslugi;

    /**
     * @var string|ZmiennaTekstowa100Type $OkresPrzyporzadkowanydoUslugi
     */
    public $OkresPrzyporzadkowanydoUslugi;

}
