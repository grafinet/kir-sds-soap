<?php

namespace pl\kir\sds\soap;

final class DaneNabywcyType {

    /**
     * @var string|TypNabywcy $TypNabywcy
     */
    public $TypNabywcy;

    /**
     * @var string|ZmiennaTekstowa100Type $NazwaFirmy
     */
    public $NazwaFirmy;

    /**
     * @var NIPType $NIP
     */
    public $NIP;

    /**
     * @var AdresDoFakturowaniaType $Adres
     */
    public $Adres;

    /**
     * @var AdresType $AdresKorespondencyjny
     */
    public $AdresKorespondencyjny;

    /**
     * @var AdresDoFakturowaniaType $AdresOddzialu
     */
    public $AdresOddzialu;

    /**
     * @var string|AdresEmailType $AdresEmail
     */
    public $AdresEmail;

    /**
     * @var AdresType $AdresDostawyDokumentowDoRejestracji
     */
    public $AdresDostawyDokumentowDoRejestracji;

    /**
     * @var AdresType $AdresDostawyDokumentowPoRejestracji
     */
    public $AdresDostawyDokumentowPoRejestracji;

}
