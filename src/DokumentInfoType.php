<?php

namespace pl\kir\sds\soap;

use DateTimeInterface;

class DokumentInfoType
{

    /**
     * @var NadawcaKomunikatuType $NadawcaKomunikatu
     */
    public $NadawcaKomunikatu;

    /**
     * @var UczestnikType $AdresatKomunikatu
     */
    public $AdresatKomunikatu;

    /**
     * @var TrescPismaPodpisType $TrescPisma
     */
    public $TrescPisma;

    /**
     * @var int|TypDokumentuType $typKomunikatu
     */
    public $typKomunikatu;

    /**
     * @var string $nazwaKomunikatu
     */
    public $nazwaKomunikatu;

    /**
     * @var DateTimeInterface $dataKomunikatu
     */
    public $dataKomunikatu;

    /**
     * @var string|idKomunikatuType $idKomunikatu
     */
    public $idKomunikatu;

    /**
     * @var string|idKomunikatuType $idKomunikatuPowiazanego
     */
    public $idKomunikatuPowiazanego;

    /**
     * @var string|idKomunikatuType $idZamowieniaPowiazanego
     */
    public $idZamowieniaPowiazanego;

    /**
     * @var string|KodSDSType $kodSDS
     */
    public $kodSDS;

    /**
     * @var string|PotwierdzenieOdbioruType $potwierdzenieOdbioru
     */
    public $potwierdzenieOdbioru;

    /**
     * @var string|wersjaKomunikatuType $wersjaKomunikatu
     */
    public $wersjaKomunikatu;

    /**
     * @var string|wersjaKomunikatuType $idProfilu
     */
    public $idProfilu;

}
