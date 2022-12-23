<?php

namespace pl\kir\sds\soap\api;

class DokumentType {

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
     * @var Zalaczniki $Zalaczniki
     */
    public $Zalaczniki;

    /**
     * @var TypDokumentuType $typKomunikatu
     */
    public $typKomunikatu;

    /**
     * @var string $nazwaKomunikatu
     */
    public $nazwaKomunikatu;

    /**
     * @var \DateTimeInterface $dataKomunikatu
     */
    public $dataKomunikatu;

    /**
     * @var idKomunikatuType $idKomunikatu
     */
    public $idKomunikatu;

    /**
     * @var idKomunikatuType $idKomunikatuPowiazanego
     */
    public $idKomunikatuPowiazanego;

    /**
     * @var idKomunikatuType $idZamowieniaPowiazanego
     */
    public $idZamowieniaPowiazanego;

    /**
     * @var KodSDSType $kodSDS
     */
    public $kodSDS;

    /**
     * @var PotwierdzenieOdbioruType $potwierdzenieOdbioru
     */
    public $potwierdzenieOdbioru;

    /**
     * @var string $wersjaKomunikatu
     */
    public $wersjaKomunikatu;

    /**
     * @var string $idProfilu
     */
    public $idProfilu;

}
