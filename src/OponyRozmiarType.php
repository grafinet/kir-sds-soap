<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.31 Specyfikacji technicznej
 */
final class OponyRozmiarType {

    /**
     * @var string|LiczbaPorzadkowaType $LiczbaPorzadkowa
     */
    public $LiczbaPorzadkowa;

    /**
     * @var string|ZmiennaTekstowa100Type $Os
     */
    public $Os;

    /**
     * @var int|string|ZmiennaLiczbowaType $OponySzerokosc
     */
    public $OponySzerokosc;

    /**
     * @var int|string|ZmiennaLiczbowaType $OponyProfil
     */
    public $OponyProfil;

    /**
     * @var int|string|ZmiennaTekstowa100Type $OponySrednica
     */
    public $OponySrednica;

    /**
     * @var string|ZmiennaTekstowa100Type $IndeksPredkosci
     */
    public $IndeksPredkosci;

    /**
     * @var string|ZmiennaTekstowa100Type $IndeksNosnosci
     */
    public $IndeksNosnosci;

    /**
     * @var string|ZmiennaTekstowa100Type $OponyRodzaj
     */
    public $OponyRodzaj;

}
