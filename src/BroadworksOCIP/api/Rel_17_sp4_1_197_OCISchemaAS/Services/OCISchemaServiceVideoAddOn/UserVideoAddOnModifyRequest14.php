<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\VideoAddOnMaxOriginatingCallDelaySeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's Video Add-On service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVideoAddOnModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVideoAddOnModifyRequest14';
    protected $userId;
    protected $isActive;
    protected $maxOriginatingCallDelaySeconds;
    protected $accessDeviceEndpoint;

    public function __construct(
         $userId = '',
         $isActive = null,
         $maxOriginatingCallDelaySeconds = null,
         $accessDeviceEndpoint = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
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
    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointModify)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointModify($accessDeviceEndpoint);
        $this->accessDeviceEndpoint->setElementName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointModify $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }
}
