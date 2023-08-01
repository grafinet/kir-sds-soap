<?php

namespace pl\kir\sds\soap;

final class SzczegolyDealeraType extends UczestnikType
{
    /**
     * @var string|ZmiennaTekstowa100Type
     */
    public $ImieUczestnika;

    /**
     * @var string|ZmiennaTekstowa100Type
     */
    public $NazwiskoUczestnika;

    /**
     * @var NIPPolskiType
     */
    public $NipUczestnika;

    /**
     * @var REGONType
     */
    public $RegonUczestnika;

    /**
     * @var ZmiennaLiczbowaType
     */
    public $NumerTelefonuUczestnika;

    /**
     * @var AdresEmailType
     */
    public $AdresEmailUczestnika;

    /**
     * @var string
     */
    public $NumerKontaBankowegoUczestnika;
}
