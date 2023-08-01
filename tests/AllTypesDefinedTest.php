<?php

use PHPUnit\Framework\TestCase;

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
        $this->ensureProperties(
            new ReflectionClass($class),
            $schema->item(0)->getElementsByTagNameNS($schemaNS, 'element')->item(0)->getElementsByTagNameNS($schemaNS, 'element')
        );
    }
    
    private function ensureProperties(ReflectionClass $reflection, DOMNodeList $elements)
    {
        $properties = [];
        foreach ($reflection->getProperties() as $prop) {
            $properties[$prop->getName()] = $prop;
        }
        foreach ($elements as $element) {
            if ($element instanceof DOMElement && ($name = $element->attributes->getNamedItem('name'))) {
                $property = trim($name->nodeValue);
                $this->assertTrue(isset($properties[$property]), "Missing property {$property} in {$reflection->getName()}");
            }
        }
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
                $baseType->getElementsByTagNameNS($schemaNS, 'element')
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
    public function testBaseComplexTypes($typeName, $elements)
    {
        $this->assertTrue(
            file_exists(__DIR__ . '/../src/' . $typeName . '.php'),
            "Missing complexType class: {$typeName}"
        );
        $class = 'pl\\kir\\sds\\soap\\' . $typeName;
        $this->assertTrue(class_exists($class));
        $this->ensureProperties(
            new ReflectionClass($class),
            $elements
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
