<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Specifies an agent's login state (availability) for a particular Call Center.
 */
class CallCenterAgentAvailability extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAgentAvailability';
    protected $serviceUserId;
    protected $available;

    public function __construct(
         $serviceUserId = '',
         $available = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAvailable($available);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAvailable($available = null)
    {
        $this->available = new PrimitiveType($available);
        $this->available->setElementName('available');
        return $this;
    }

    /**
     * 
     * @return boolean $available
     */
    public function getAvailable()
    {
        return ($this->available)
            ? $this->available->getElementValue()
            : null;
    }
}
