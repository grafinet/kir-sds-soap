<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

final class PobierzDokumentRequest {

    /**
     * @var string|idKomunikatuType $idKomunikatu
     */
    public $idKomunikatu;

    /**
     * @var string|KodSDSType $kodSDS
     */
    public $kodSDS;

    /**
     * @var DateTimeInterface $dataKomunikatuPo
     */
    public $dataKomunikatuPo;

    /**
     * @var DateTimeInterface $dataKomunikatuPrzed
     */
    public $dataKomunikatuPrzed;

    /**
     * @var bool $czyZwrocicAktualnyStatus
     */
    public $czyZwrocicAktualnyStatus;
}
