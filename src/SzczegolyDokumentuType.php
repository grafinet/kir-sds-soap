<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

class SzczegolyDokumentuType {

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
     * @var KodUczestnikaType $kodUczestnika
     */
    public $kodUczestnika;

    /**
     * @var DateTimeInterface $dataKomunikatu
     */
    public $dataKomunikatu;

}
