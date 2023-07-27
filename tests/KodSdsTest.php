<?php

use pl\kir\sds\soap\KodSDSType;

class KodSdsTest extends \PHPUnit\Framework\TestCase
{
    public function testValidSdsCode()
    {
        $raw = '1301_2023-07-27 17:01:45_e53c9d5b-cd15-4d5e-8559-e21ebd103b0e';
        $sds = new KodSDSType($raw);
        $this->assertSame($raw, (string)$sds);
    }
}
