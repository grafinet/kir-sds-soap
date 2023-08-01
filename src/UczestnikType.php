<?php

namespace pl\kir\sds\soap;

class UczestnikType {

    /**
     * @var string|ZmiennaTekstowa512Type $KodUczestnika
     */
    public $KodUczestnika;

    /**
     * @var string|ZmiennaTekstowa255Type $NazwaUczestnika
     */
    public $NazwaUczestnika;

    /**
     * @var AdresType $AdresUczestnika
     */
    public $AdresUczestnika;

}
