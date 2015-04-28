<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * One name value pair for a LDAP entry.
 */
class LDAPEntryField extends ComplexType implements ComplexInterface
{
    public    $elementName = 'LDAPEntryField';
    protected $attributeName;
    protected $attributeValue;

    public function __construct(
         $attributeName = '',
         $attributeValue = null
    ) {
        $this->setAttributeName($attributeName);
        $this->setAttributeValue($attributeValue);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAttributeName($attributeName = null)
    {
        $this->attributeName = new SimpleContent($attributeName);
        $this->attributeName->setElementName('attributeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $attributeName
     */
    public function getAttributeName()
    {
        return ($this->attributeName)
            ? $this->attributeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAttributeValue($attributeValue = null)
    {
        $this->attributeValue = new SimpleContent($attributeValue);
        $this->attributeValue->setElementName('attributeValue');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $attributeValue
     */
    public function getAttributeValue()
    {
        return ($this->attributeValue)
            ? $this->attributeValue->getElementValue()
            : null;
    }
}
