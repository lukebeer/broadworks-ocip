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
    public    $name                  = __CLASS__;
    protected $userId                = null;
    protected $accessDeviceEndpoint  = null;
    protected $isActive              = null;
    protected $allowOrigination      = null;
    protected $allowTermination      = null;

    public function __construct(
         $userId,
         AccessDeviceEndpointAdd $accessDeviceEndpoint,
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

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
    }

    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowOrigination(xs:boolean $allowOrigination = null)
    {
    }

    public function getAllowOrigination()
    {
        return (!$this->allowOrigination) ?: $this->allowOrigination->value();
    }

    public function setAllowTermination(xs:boolean $allowTermination = null)
    {
    }

    public function getAllowTermination()
    {
        return (!$this->allowTermination) ?: $this->allowTermination->value();
    }
}
