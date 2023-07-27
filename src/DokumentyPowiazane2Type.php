<?php

namespace pl\kir\sds\soap;

class DokumentyPowiazane2Type {

    /**
     * @var IdentyfikatorPowiazaniaType $NumerUmowy
     */
    public $NumerUmowy;

    /**
     * @var IdentyfikatorPowiazaniaType $NumerZamowienia
     */
    public $NumerZamowienia;

    /**
     * @var IdentyfikatorPowiazaniaType $NumerOferty
     */
    public $NumerOferty;

    /**
     * @var IdentyfikatorPowiazaniaType $NumerPotwierdzenia
     */
    public $NumerPotwierdzenia;

    /**
     * @var IdentyfikatorPowiazaniaType[] $InnyDokument
     */
    public $InnyDokument;

}
