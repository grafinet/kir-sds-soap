<?php

namespace pl\kir\sds\soap;

class ZalacznikMetadataType
{
    /**
     * @var string|KodowanieTresciType
     */
    public $kodowanie = 'Base64';

    /**
     * Valid extensions: jpg, pdf, tif, tiff, doc, docx, csv
     * @var string
     */
    public $nazwaPliku;

    /**
     * @var string
     */
    public $sumaSHA512;

    /**
     * @var string|ZmiennaLiczbowaDodatniaType
     */
    public $id;
}
