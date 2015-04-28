<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EndpointType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular endpoint type.
 */
class SearchCriteriaExactEndpointType extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactEndpointType';
    protected $endpointType;

    public function __construct(
         $endpointType = ''
    ) {
        $this->setEndpointType($endpointType);
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
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
        $this->endpointType->setElementName('endpointType');
        return $this;
    }

    /**
     * 
     * @return EndpointType $endpointType
     */
    public function getEndpointType()
    {
        return ($this->endpointType)
            ? $this->endpointType->getElementValue()
            : null;
    }
}
