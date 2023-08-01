<?php

namespace pl\kir\sds\soap;

use pl\kir\sds\soap\Exception\RestrictionException;
use Stringable;
use function preg_match;
use function sprintf;

abstract class StringType implements Stringable
{
    public const TEKST_REGEXP = '[a-zA-ZąĄćĆęĘłŁńŃóÓśŚżŻźŹÄÖÜäöüÁÉÍÓÖŐÚÜŰáéíóöőúüűßŽžŠÉÁ0-9\.,\(\)\[\]\\_=\'\+:\?!%\*;{}~-¬`˘°@#-̲–Ő\|&#x0022;&#x0026;&#x0027;&#x00A0;&#x201C;&#x201D;&#x2013;&#x2014; ]';
    public const TEKST_100  = '/^' . self::TEKST_REGEXP . '{1,100}$/';
    public const TEKST_201  = '/^' . self::TEKST_REGEXP . '{1,201}$/';
    public const TEKST_255  = '/^' . self::TEKST_REGEXP . '{1,255}$/';
    public const TEKST_512  = '/^' . self::TEKST_REGEXP . '{1,512}$/';
    public const TEKST_5000 = '/^[\p{L}\d\s!@#$%\(\)\*\+,\.\-:;=\?\[\]\\\^_\{\}\|~`&#x0022;&#x0026;&#x0027;&#x00A0;&#x00AC;&#x00AE;&#x00FF;&#x0100;&#x017f;&#x0180;&#x024f;&#x0250;&#x02af;&#x02b0;&#x02ff;&#x0300;&#x036f;&#x201E;&#x201D;&#x2013;&#x2014; ]{1,5000}$/';

    /**
     * @var string to overwrite in child types
     */
    protected $pattern;

    /**
     * @param string $value
     * @throws RestrictionException
     */
    public function __construct(private readonly string $value)
    {
        if ($this->pattern && !preg_match($this->pattern, $this->value)) {
            throw new RestrictionException(
                sprintf("Value for %s does not match required pattern", static::class)
            );
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
