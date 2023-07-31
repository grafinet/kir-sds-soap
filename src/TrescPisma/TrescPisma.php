<?php

namespace pl\kir\sds\soap\TrescPisma;

use DateTimeInterface;
use DOMDocument;
use DOMElement;
use function array_is_list;
use function is_array;
use function is_object;
use function sprintf;

/**
 * @const string NAMESPACE_URI
 * @const string NAMESPACE_PREFIX
 */
abstract class TrescPisma
{
    public final function __toString(): string
    {
        $dom = new DOMDocument();
        $trescPisma = $dom->createElementNS(
            static::NAMESPACE_URI,
            sprintf('%s:TrescPisma', static::NAMESPACE_PREFIX)
        );
        $trescPisma->setAttribute('Zawartosc', 'Tresc');
        $this->appendNodes($dom, $trescPisma, $this);
        $dom->append($trescPisma);
        return $dom->C14N();
    }

    private function appendNodes(DOMDocument $dom, DOMElement $parentNode, $nodes)
    {
        foreach ($nodes as $propertyName => $propertyValue) {
            if ($propertyValue === null) {
                continue;
            }

            if (is_array($propertyValue) && array_is_list($propertyValue)) {
                foreach ($propertyValue as $value) {
                    if (is_array($value) || is_object($value)) {
                        $currentNode = $dom->createElement($propertyName);
                        $this->appendNodes($dom, $currentNode, $value);
                        $parentNode->append($currentNode);
                    } else {
                        $parentNode->append(
                            $dom->createElement($propertyName, (string)$value)
                        );
                    }
                }
            }
            elseif ($propertyValue instanceof DateTimeInterface) {
                $parentNode->append(
                    $dom->createElement($propertyName, $propertyValue->format('Y-m-d'))
                );
            }
            elseif (is_object($propertyValue) || is_array($propertyValue)) {
                if ($propertyValue instanceof \Stringable || is_callable([$propertyValue, '__toString'])) {
                    $parentNode->append(
                        $dom->createElement($propertyName, (string)$propertyValue)
                    );
                } else {
                    $currentNode = $dom->createElement($propertyName);
                    $this->appendNodes($dom, $currentNode, $propertyValue);
                    $parentNode->append($currentNode);
                }
            }
            else {
                $parentNode->append(
                    $dom->createElement($propertyName, (string)$propertyValue)
                );
            }
        }
    }
}
