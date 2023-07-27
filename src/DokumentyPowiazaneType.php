<?php

namespace pl\kir\sds\soap;

class DokumentyPowiazaneType {

    /**
     * @var IdentyfikatorPowiazaniaType $NumerUmowy
     */
    public $NumerUmowy;

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
