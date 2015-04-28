<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\VideoAddOnMaxOriginatingCallDelaySeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointRead14;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserVideoAddOnGetRequest14.
 */
class UserVideoAddOnGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVideoAddOnGetResponse14';
    protected $isActive;
    protected $maxOriginatingCallDelaySeconds;
    protected $accessDeviceEndpoint;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\UserVideoAddOnGetResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds = null)
    {
        $this->maxOriginatingCallDelaySeconds = ($maxOriginatingCallDelaySeconds InstanceOf VideoAddOnMaxOriginatingCallDelaySeconds)
             ? $maxOriginatingCallDelaySeconds
             : new VideoAddOnMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds);
        $this->maxOriginatingCallDelaySeconds->setElementName('maxOriginatingCallDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return ($this->maxOriginatingCallDelaySeconds)
            ? $this->maxOriginatingCallDelaySeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointRead14 $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointRead14)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointRead14($accessDeviceEndpoint);
        $this->accessDeviceEndpoint->setElementName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointRead14 $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }
}
