<?php

use PHPUnit\Framework\TestCase;
use pl\kir\sds\soap\SzczegolyDealeraType;

class AllTypesDefinedTest extends TestCase
{
    public function complexTypesDataProvider(): array
    {
        $names = [];

        foreach (glob(__DIR__ . '/../resources/*.xsd') as $xsd) {
            $file = realpath($xsd);
            if (basename($file) == 'BazoweTypy.xsd') {
                continue;
            }
            $names[] = [explode('.', basename($file))[0]];
        }
        return $names;
    }

    /**
     * @dataProvider complexTypesDataProvider
     */
    public function testComplexTypes($className)
    {
        if ($className === 'Dokument') {
            $file = __DIR__ . '/../src/DokumentType.php';
            $msg = "Missing type class: DokumentType";
            $class = 'pl\\kir\\sds\\soap\\DokumentType';
        } else {
            $file = __DIR__ . '/../src/TrescPisma/' . $className . '.php';
            $msg = "Missing 'TrescPisma' type class: {$className}";
            $class = 'pl\\kir\\sds\\soap\\TrescPisma\\' . $className;
        }
        $this->assertTrue(file_exists($file), $msg);
        $this->assertTrue(class_exists($class));

        $dom = new DOMDocument();
        $dom->load(__DIR__ . "/../resources/{$className}.xsd");
        $schema = $dom->getElementsByTagNameNS($schemaNS = 'http://www.w3.org/2001/XMLSchema', 'schema');

        $schemaAttributes = [];
        if ($className === 'Dokument') {
            /** @var DOMElement $complexType */
            $complexType = $schema->item(0)->getElementsByTagNameNS($schemaNS, 'complexType')->item(0);
        } else {
            $complexType = $schema->item(0)->getElementsByTagNameNS($schemaNS, 'element')->item(0);
        }
        $schemaProperties = $complexType->getElementsByTagNameNS($schemaNS, 'element');
        $schemaAttributes = $complexType->getElementsByTagNameNS($schemaNS, 'attribute');
        $this->ensureProperties(
            new ReflectionClass($class),
            $schemaProperties,
            $schemaAttributes
        );
    }
    
    private function ensureProperties(ReflectionClass $reflection, DOMNodeList $elements, iterable $attributes = [])
    {
        $properties = [];
        foreach ($reflection->getProperties() as $prop) {
            $propName = \ltrim($prop->getName(), '_');
            if (!\strlen($propName)) {
                continue;
            }
            $properties[$propName] = $prop;
        }
        foreach ($elements as $element) {
            if ($element instanceof DOMElement && ($name = $element->attributes->getNamedItem('name'))) {
                $property = trim($name->nodeValue);
                $this->assertTrue(isset($properties[$property]), "Missing property {$property} in {$reflection->getName()}");
                unset($properties[$property]);
            }
        }
        foreach ($attributes as $attribute) {
            if ($attribute instanceof DOMElement && ($name = $attribute->attributes->getNamedItem('name'))) {
                $property = trim($name->nodeValue);
                if (str_contains($reflection->getNamespaceName(), 'TrescPisma') && $property === 'Zawartosc') {
                    continue;
                }
                $this->assertTrue(isset($properties[$property]), "Missing attribute {$property} in {$reflection->getName()}");
                unset($properties[$property]);
            }
        }
        if ($reflection->getName() === SzczegolyDealeraType::class) {
            foreach (['KodUczestnika', 'NazwaUczestnika', 'AdresUczestnika'] as $inherited) {
                if (isset($properties[$inherited])) {
                    unset($properties[$inherited]);
                }
            }
        } else
        $this->assertEmpty($properties,
            sprintf(
                'Unexpected properties in %s: %s',
                $reflection->getName(),
                implode(', ', array_keys($properties))
            )
        );
    }

    private function scanBaseTypes($node = 'complexType') {
        $names = [];
        $dom = new DOMDocument();
        $dom->load(__DIR__ . '/../resources/BazoweTypy.xsd');
        $schema = $dom->getElementsByTagNameNS($schemaNS = 'http://www.w3.org/2001/XMLSchema', 'schema');
        foreach ($schema->item(0)->childNodes as $baseType) {
            if (!$baseType instanceof DOMElement || !str_ends_with($baseType->tagName, $node)) {
                continue;
            }
            $names[] = [
                $baseType->attributes->getNamedItem('name')->nodeValue,
                $baseType->getElementsByTagNameNS($schemaNS, 'element'),
                $baseType->getElementsByTagNameNS($schemaNS, 'attribute'),
            ];
        }
        return $names;
    }

    public function baseSimpleTypesDataProvider(): array{
        return $this->scanBaseTypes('simpleType');
    }

    public function baseComplexTypesDataProvider(): array{
        return $this->scanBaseTypes();
    }

    /**
     * @dataProvider baseComplexTypesDataProvider
     */
    public function testBaseComplexTypes($typeName, $elements, $attributes = [])
    {
        $this->assertTrue(
            file_exists(__DIR__ . '/../src/' . $typeName . '.php'),
            "Missing complexType class: {$typeName}"
        );
        $class = 'pl\\kir\\sds\\soap\\' . $typeName;
        $this->assertTrue(class_exists($class));
        $this->ensureProperties(
            new ReflectionClass($class),
            $elements,
            $attributes
        );
    }

    /**
     * @dataProvider baseSimpleTypesDataProvider
     */
    public function testBaseSimpleTypes($typeName)
    {
        $this->assertTrue(
            file_exists(__DIR__ . '/../src/' . $typeName . '.php'),
            "Missing simpleType class: {$typeName}"
        );
        $class = 'pl\\kir\\sds\\soap\\' . $typeName;
        $this->assertTrue(class_exists($class));
    }
}
