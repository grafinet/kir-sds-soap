<?php

namespace pl\kir\sds\soap;

final class AdresType {

    /**
     * @var string|ZmiennaTekstowa100Type $Miejscowosc
     */
    public $Miejscowosc;

    /**
     * @var string|ZmiennaTekstowa100Type $Ulica
     */
    public $Ulica;

    /**
     * @var string|ZmiennaTekstowa100Type $NrDomu
     */
    public $NrDomu;

    /**
     * @var string|ZmiennaTekstowa100Type $NrLokalu
     */
    public $NrLokalu;

    /**
     * @var string|ZmiennaTekstowa100Type $KodPocztowy
     */
    public $KodPocztowy;

    /**
     * @var string|KodKrajuType $KodKraju
     */
    public $KodKraju;

}
