<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointAdd;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Associate an access device instance to the user's Shared Call Appearance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceAddEndpointRequest14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $accessDeviceEndpoint = null;
    protected $isActive             = null;
    protected $allowOrigination     = null;
    protected $allowTermination     = null;

    public function __construct(
         $userId,
          $accessDeviceEndpoint,
         $isActive,
         $allowOrigination,
         $allowTermination
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setIsActive($isActive);
        $this->setAllowOrigination($allowOrigination);
        $this->setAllowTermination($allowTermination);
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
     * Access device end point used in the context of add.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint =  $accessDeviceEndpoint;
    }

    /**
     * Access device end point used in the context of add.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
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
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        $this->allowOrigination = (boolean) $allowOrigination;
    }

    /**
     * 
     */
    public function getAllowOrigination()
    {
        return (!$this->allowOrigination) ?: $this->allowOrigination->getValue();
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        $this->allowTermination = (boolean) $allowTermination;
    }

    /**
     * 
     */
    public function getAllowTermination()
    {
        return (!$this->allowTermination) ?: $this->allowTermination->getValue();
    }
}
