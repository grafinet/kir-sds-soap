<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.16 Specyfikacji technicznej
 *
 * Obowiązkowe Pole NIPPolski ALBO NIPZagraniczny
 */
final class NIPType {

    /**
     * @var string|NIPPolskiType $NIPPolski
     */
    public $NIPPolski;

    /**
     * @var ZmiennaTekstowa100Type|string $NIPZagraniczny
     */
    public $NIPZagraniczny;

}
