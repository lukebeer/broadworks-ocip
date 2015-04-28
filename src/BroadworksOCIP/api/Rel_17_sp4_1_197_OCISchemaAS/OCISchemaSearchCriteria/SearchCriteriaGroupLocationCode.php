<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a group location dialing code.
 */
class SearchCriteriaGroupLocationCode extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaGroupLocationCode';
    protected $mode;
    protected $value;
    protected $isCaseInsensitive;

    public function __construct(
         $mode = '',
         $value = '',
         $isCaseInsensitive = ''
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
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
    public function setMode($mode = null)
    {
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
        $this->mode->setElementName('mode');
        return $this;
    }

    /**
     * 
     * @return SearchMode $mode
     */
    public function getMode()
    {
        return ($this->mode)
            ? $this->mode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf LocationDialingCode)
             ? $value
             : new LocationDialingCode($value);
        $this->value->setElementName('value');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode $value
     */
    public function getValue()
    {
        return ($this->value)
            ? $this->value->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCaseInsensitive($isCaseInsensitive = null)
    {
        $this->isCaseInsensitive = new PrimitiveType($isCaseInsensitive);
        $this->isCaseInsensitive->setElementName('isCaseInsensitive');
        return $this;
    }

    /**
     * 
     * @return boolean $isCaseInsensitive
     */
    public function getIsCaseInsensitive()
    {
        return ($this->isCaseInsensitive)
            ? $this->isCaseInsensitive->getElementValue()
            : null;
    }
}
