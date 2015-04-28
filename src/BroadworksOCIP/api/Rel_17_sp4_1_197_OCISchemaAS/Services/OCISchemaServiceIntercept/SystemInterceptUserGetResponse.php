<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInterceptUserGetResponse';
    protected $emergencyAndRepairIntercept;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\SystemInterceptUserGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept = null)
    {
        $this->emergencyAndRepairIntercept = new PrimitiveType($emergencyAndRepairIntercept);
        $this->emergencyAndRepairIntercept->setElementName('emergencyAndRepairIntercept');
        return $this;
    }

    /**
     * 
     * @return boolean $emergencyAndRepairIntercept
     */
    public function getEmergencyAndRepairIntercept()
    {
        return ($this->emergencyAndRepairIntercept)
            ? $this->emergencyAndRepairIntercept->getElementValue()
            : null;
    }
}
