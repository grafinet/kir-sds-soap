<?php

namespace TrescPismaTest;

use PHPUnit\Framework\TestCase;
use pl\kir\sds\soap\Exception\RestrictionException;
use pl\kir\sds\soap\KodSDSType;
use pl\kir\sds\soap\TrescPisma\Zamowienie;

class ZamowinieTest extends TestCase
{
    public function testEmptyZamowienieToXml()
    {
        $zam = new Zamowienie();
        $this->assertSame('<zam:TrescPisma xmlns:zam="https://www.kir.pl/SystemDokumentowStrukturyzowanych/Zamowienie" Zawartosc="Tresc"></zam:TrescPisma>', (string)$zam);
    }
}
