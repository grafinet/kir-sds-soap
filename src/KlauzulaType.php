<?php

namespace pl\kir\sds\soap;

/**
 * Sekcja opisana w rozdziale 7.35 Specyfikacji technicznej
 */
class KlauzulaType {

    /**
     * @var string|LiczbaPorzadkowaType $ListaPorzadkowaKlauzuli
     */
    public $ListaPorzadkowaKlauzuli;

    /**
     * @var string|PoleOpisoweType $TrescKlauzuli
     */
    public $TrescKlauzuli;

    /**
     * @var string|DataKlauzuliType $DataKlauzuli
     */
    public $DataKlauzuli;

}
