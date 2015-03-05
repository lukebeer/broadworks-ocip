<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserHotelingGuestGetRequest14sp4
 */
class UserHotelingGuestGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $enableAssociationLimit,
             $associationLimitHours,
             $hostUserId=null,
             $hostLastName=null,
             $hostFirstName=null,
             $hostAssociationDateTime=null,
             $hostEnforcesAssociationLimit=null,
             $hostAssociationLimitHours=null
    ) {
        $this->isActive                     = $isActive;
        $this->enableAssociationLimit       = $enableAssociationLimit;
        $this->associationLimitHours        = new HotelingAssociationLimitHours($associationLimitHours);
        $this->hostUserId                   = new UserId($hostUserId);
        $this->hostLastName                 = new LastName($hostLastName);
        $this->hostFirstName                = new FirstName($hostFirstName);
        $this->hostAssociationDateTime      = $hostAssociationDateTime;
        $this->hostEnforcesAssociationLimit = $hostEnforcesAssociationLimit;
        $this->hostAssociationLimitHours    = new HotelingAssociationLimitHours($hostAssociationLimitHours);
        $this->args                         = func_get_args();
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

    public function setHostLastName($hostLastName)
    {
        $hostLastName and $this->hostLastName = new LastName($hostLastName);
    }

    public function getHostLastName()
    {
        return (!$this->hostLastName) ?: $this->hostLastName->value();
    }

    public function setHostFirstName($hostFirstName)
    {
        $hostFirstName and $this->hostFirstName = new FirstName($hostFirstName);
    }

    public function getHostFirstName()
    {
        return (!$this->hostFirstName) ?: $this->hostFirstName->value();
    }

    public function setHostAssociationDateTime($hostAssociationDateTime)
    {
        $hostAssociationDateTime and $this->hostAssociationDateTime = new xs:dateTime($hostAssociationDateTime);
    }

    public function getHostAssociationDateTime()
    {
        return (!$this->hostAssociationDateTime) ?: $this->hostAssociationDateTime->value();
    }

    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit)
    {
        $hostEnforcesAssociationLimit and $this->hostEnforcesAssociationLimit = new xs:boolean($hostEnforcesAssociationLimit);
    }

    public function getHostEnforcesAssociationLimit()
    {
        return (!$this->hostEnforcesAssociationLimit) ?: $this->hostEnforcesAssociationLimit->value();
    }

    public function setHostAssociationLimitHours($hostAssociationLimitHours)
    {
        $hostAssociationLimitHours and $this->hostAssociationLimitHours = new HotelingAssociationLimitHours($hostAssociationLimitHours);
    }

    public function getHostAssociationLimitHours()
    {
        return (!$this->hostAssociationLimitHours) ?: $this->hostAssociationLimitHours->value();
    }
}
