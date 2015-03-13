<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\VideoAddOnMaxOriginatingCallDelaySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's Video Add-On service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVideoAddOnModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserVideoAddOnModifyRequest14';
    protected $userId                         = null;
    protected $isActive                       = null;
    protected $maxOriginatingCallDelaySeconds = null;
    protected $accessDeviceEndpoint           = null;

    public function __construct(
         $userId,
         $isActive = null,
         $maxOriginatingCallDelaySeconds = null,
         AccessDeviceEndpointModify $accessDeviceEndpoint = null
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds = null)
    {
        if (!$maxOriginatingCallDelaySeconds) return $this;
        $this->maxOriginatingCallDelaySeconds = ($maxOriginatingCallDelaySeconds InstanceOf VideoAddOnMaxOriginatingCallDelaySeconds)
             ? $maxOriginatingCallDelaySeconds
             : new VideoAddOnMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds);
        $this->maxOriginatingCallDelaySeconds->setName('maxOriginatingCallDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return $this->maxOriginatingCallDelaySeconds->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if (!$accessDeviceEndpoint) return $this;
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
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
