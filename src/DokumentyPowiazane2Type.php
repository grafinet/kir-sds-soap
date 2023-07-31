<?php

namespace pl\kir\sds\soap;

final class DokumentyPowiazane2Type {

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
