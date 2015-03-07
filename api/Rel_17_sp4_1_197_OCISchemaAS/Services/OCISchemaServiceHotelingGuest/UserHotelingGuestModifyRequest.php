<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Hoteling Guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingGuestModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $userId                  = null;
    protected $isActive                = null;
    protected $enableAssociationLimit  = null;
    protected $associationLimitHours   = null;
    protected $hostUserId              = null;

    public function __construct(
         $userId,
         $isActive = null,
         $enableAssociationLimit = null,
         $associationLimitHours = null,
         $hostUserId = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setEnableAssociationLimit($enableAssociationLimit);
        $this->setAssociationLimitHours($associationLimitHours);
        $this->setHostUserId($hostUserId);
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

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEnableAssociationLimit(xs:boolean $enableAssociationLimit = null)
    {
    }

    public function getEnableAssociationLimit()
    {
        return (!$this->enableAssociationLimit) ?: $this->enableAssociationLimit->value();
    }

    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
    }

    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->value();
    }

    public function setHostUserId($hostUserId = null)
    {
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
    }

    public function getHostUserId()
    {
        return (!$this->hostUserId) ?: $this->hostUserId->value();
    }
}
