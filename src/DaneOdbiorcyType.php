<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.19 Specyfikacji technicznej
 * Sekcja wymagana tylko w skróconym procesie
 */
final class DaneOdbiorcyType {

    /**
     * @var string|TypOdbiorcy $TypOdbiorcy
     */
    public $TypOdbiorcy;

    /**
     * @var string|ZmiennaTekstowa100Type $NazwaFirmy
     */
    public $NazwaFirmy;

    /**
     * @var NIPType $NIP
     */
    public $NIP;

    /**
     * @var string|REGONType $REGON
     */
    public $REGON;

    /**
     * @var AdresType $Adres
     */
    public $Adres;

    /**
     * @var string|AdresEmailType $AdresEmail
     */
    public $AdresEmail;

}
