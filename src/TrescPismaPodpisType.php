<?php

namespace pl\kir\sds\soap;

final class TrescPismaPodpisType {

    public function __construct(string $nodeValue)
    {
        $this->_ = $nodeValue;
    }

    /**
     * @var string $_
     */
    public $_;

    /**
     * @var ZawartoscTresciType $Zawartosc
     */
    public $Zawartosc;

    /**
     * @var TypTresciType $Typ
     */
    public $Typ;

    /**
     * @var string|KodowanieTresciType $Kodowanie
     */
    public $Kodowanie;

}
