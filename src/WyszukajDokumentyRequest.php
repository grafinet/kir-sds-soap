<?php

namespace pl\kir\sds\soap\api;

class WyszukajDokumentyRequest {

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
     * @var \DateTimeInterface $dataKomunikatuPo
     */
    public $dataKomunikatuPo;

    /**
     * @var \DateTimeInterface $dataKomunikatuPrzed
     */
    public $dataKomunikatuPrzed;

    /**
     * @var int $numerStrony
     */
    public $numerStrony;

    /**
     * @var int $rozmiarStrony
     */
    public $rozmiarStrony;

}
