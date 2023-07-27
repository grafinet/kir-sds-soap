<?php

namespace pl\kir\sds\soap;

use pl\kir\sds\soap\Exception\RestrictionException;
use function preg_match;
use function sprintf;

abstract class StringType
{
    public const TEKST_REGEXP = '[a-zA-ZąĄćĆęĘłŁńŃóÓśŚżŻźŹÄÖÜäöüÁÉÍÓÖŐÚÜŰáéíóöőúüűßŽžŠÉÁ0-9\\.,\\(\\)\\[\\]\\\\_=\'\\+:\\?!%\\*;{}~-¬`˘°@#-̲–Ő\\|&#x0022;&#x0026;&#x0027;&#x00A0;&#x201C;&#x201D;&#x2013;&#x2014 ]';
    public const TEKST_100  = '/^' . self::TEKST_REGEXP . '{1,100}$/';
    public const TEKST_255  = '/^' . self::TEKST_REGEXP . '{1,255}$/';
    public const TEKST_512  = '/^' . self::TEKST_REGEXP . '{1,512}$/';
    public const TEKST_5000 = '/^' . self::TEKST_REGEXP . '{1,5000}$/';

    protected $pattern = '';

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