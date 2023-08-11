<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.17 Specyfikacji technicznej
 */
final class DaneDostawcyType {

    /**
     * @var TypDostawcy $TypDostawcy
     */
    public $TypDostawcy;

    /**
     * @var ZmiennaTekstowa100Type|string $NazwaFirmy
     */
    public $NazwaFirmy;

    /**
     * @var NIPType $NIP
     */
    public $NIP;

    /**
     * @var REGONType|string $REGON
     */
    public $REGON;

    /**
     * @var AdresType $Adres
     */
    public $Adres;

    /**
     * @var ZmiennaLiczbowaType|int $NrTelefonu
     */
    public $NrTelefonu;

    /**
     * @var ZmiennaTekstowa100Type|string $ImieINazwiskoWystawcyDokumentu
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
