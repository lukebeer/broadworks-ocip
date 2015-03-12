<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Serializer;
use Broadworks_OCIP\core\Builder\Types\TableType;


class XMLSerializer implements SerializerInterface {
    public $object;
    public $methods;
    public $setter;


    public function serialize($destinationObject, $xmlString)
    {
        $simpleXMLElement = simplexml_load_string($xmlString);
        return $this->buildComplex($destinationObject, $simpleXMLElement);
    }

    public function buildComplex($destinationObject, $simpleXMLElement)
    {
        $reflectionClass = new \ReflectionClass($destinationObject);
        $object = $reflectionClass->newInstance();
        $methods = get_class_methods($destinationObject);
        foreach ($simpleXMLElement->children() as $key => $value) {
            $methodName = 'set'.ucfirst($key);
            if (in_array($methodName, $methods)) {
                if (count($value->children()) == 0) {
                    $object->$methodName((string) $value);
                } else {
                    if (preg_match('/Table/i', (string) $key)) {
                        $obj = new TableType($key, $value);
                    } else {
                        $method = $reflectionClass->getMethod($methodName)->getParameters();
                        $type = $method[0]->getClass()->getName();
                        $obj = $this->buildComplex($type, $value);
                        $obj->$methodName($obj);
                    }
                    $object->$methodName($obj);
                }
            }
        }
        return $object;
    }
}