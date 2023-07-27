<?php

use PHPUnit\Framework\TestCase;
use pl\kir\sds\soap\Exception\RestrictionException;
use pl\kir\sds\soap\Zalacznik;

class ZalacznikTest extends TestCase
{
    public function testValidPattern()
    {
        $zal = new Zalacznik("T");
        $this->assertSame("T", (string)$zal);
    }

    public function testInvalidPattern()
    {
        $this->expectException(RestrictionException::class);
        new Zalacznik("123");
    }
}