<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Hoteling Guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingGuestModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $enableAssociationLimit=null,
             $associationLimitHours=null,
             $hostUserId=null
    ) {
        $this->userId                 = new UserId($userId);
        $this->isActive               = $isActive;
        $this->enableAssociationLimit = $enableAssociationLimit;
        $this->associationLimitHours  = new HotelingAssociationLimitHours($associationLimitHours);
        $this->hostUserId             = new UserId($hostUserId);
        $this->args                   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $enableAssociationLimit and $this->enableAssociationLimit = new xs:boolean($enableAssociationLimit);
    }

    public function getEnableAssociationLimit()
    {
        return (!$this->enableAssociationLimit) ?: $this->enableAssociationLimit->value();
    }

    public function setAssociationLimitHours($associationLimitHours)
    {
        $associationLimitHours and $this->associationLimitHours = new HotelingAssociationLimitHours($associationLimitHours);
    }

    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->value();
    }

    public function setHostUserId($hostUserId)
    {
        $hostUserId and $this->hostUserId = new UserId($hostUserId);
    }

    public function getHostUserId()
    {
        return (!$this->hostUserId) ?: $this->hostUserId->value();
    }
}
