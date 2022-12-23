<?php

namespace pl\kir\sds\soap\api;

class SzczegolyDokumentuType {

    /**
     * @var string $idKomunikatu
     */
    public $idKomunikatu;

    /**
     * @var KodSDSType $kodSDS
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
     * @var \DateTimeInterface $dataKomunikatu
     */
    public $dataKomunikatu;

}
