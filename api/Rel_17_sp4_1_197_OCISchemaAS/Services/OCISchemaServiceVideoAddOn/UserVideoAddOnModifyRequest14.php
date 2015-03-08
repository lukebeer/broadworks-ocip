<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVideoAddOn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\VideoAddOnMaxOriginatingCallDelaySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's Video Add-On service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVideoAddOnModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Maximum Originating Call Delay.
     */
    public function setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds = null)
    {
        $this->maxOriginatingCallDelaySeconds = ($maxOriginatingCallDelaySeconds InstanceOf VideoAddOnMaxOriginatingCallDelaySeconds)
             ? $maxOriginatingCallDelaySeconds
             : new VideoAddOnMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds);
    }

    /**
     * Maximum Originating Call Delay.
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return (!$this->maxOriginatingCallDelaySeconds) ?: $this->maxOriginatingCallDelaySeconds->getValue();
    }

    /**
     * Access device end point used in the context of modify.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = AccessDeviceEndpointModify $accessDeviceEndpoint;
    }

    /**
     * Access device end point used in the context of modify.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }
}
