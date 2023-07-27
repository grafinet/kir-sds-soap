<?php

namespace pl\kir\sds\soap;

final class DaneDostawcyType {

    /**
     * @var TypDostawcy $TypDostawcy
     */
    public $TypDostawcy;

    /**
     * @var string $NazwaFirmy
     */
    public $NazwaFirmy;

    /**
     * @var NIPType $NIP
     */
    public $NIP;

    /**
     * @var string $REGON
     */
    public $REGON;

    /**
     * @var AdresType $Adres
     */
    public $Adres;

    /**
     * @var int $NrTelefonu
     */
    public $NrTelefonu;

    /**
     * @var string $ImieINazwiskoWystawcyDokumentu
     */
    public $ImieINazwiskoWystawcyDokumentu;

    /**
     * @var string|NumerRachunkuPlatnoscWWalucieObcejType $NumerRachunkuPlatnoscWWalucieObcej
     */
    public $NumerRachunkuPlatnoscWWalucieObcej;

    /**
     * @var string|NumerRachunkuPlatnoscwPLNType $NumerRachunkuPlatnoscwPLN
     */
    public $NumerRachunkuPlatnoscwPLN;

    /**
     * @var KodSwiftType $Swift
     */
    public $Swift;

    /**
     * @var AdresType $AdresDoKorespondencji
     */
    public $AdresDoKorespondencji;

    /**
     * @var string|AdresEmailType $AdresEmailType
     */
    public $AdresEmailType;

}
