<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular fully specified service type.
 */
class SearchCriteriaExactServiceType extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactServiceType';
    protected $serviceType;

    public function __construct(
         $serviceType = ''
    ) {
        $this->setServiceType($serviceType);
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
    public function setServiceType($serviceType = null)
    {
        $this->serviceType = ($serviceType InstanceOf ServiceType)
             ? $serviceType
             : new ServiceType($serviceType);
        $this->serviceType->setElementName('serviceType');
        return $this;
    }

    /**
     * 
     * @return ServiceType $serviceType
     */
    public function getServiceType()
    {
        return ($this->serviceType)
            ? $this->serviceType->getElementValue()
            : null;
    }
}
