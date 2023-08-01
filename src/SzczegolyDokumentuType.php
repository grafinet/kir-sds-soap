<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

final class SzczegolyDokumentuType {

    /**
     * @var string $idKomunikatu
     */
    public $idKomunikatu;

    /**
     * @var string|KodSDSType $kodSDS
     */
    public $kodSDS;

    /**
     * @var TypDokumentuType $typKomunikatu
     */
    public $typKomunikatu;

    /**
     * @var string|ZmiennaTekstowa512Type $kodUczestnika
     */
    public $kodUczestnika;

    /**
     * @var DateTimeInterface $dataKomunikatu
     */
    public $dataKomunikatu;

    /**
     * @var string|TakNieType
     */
    public $pobrany;

}
