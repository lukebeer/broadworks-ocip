<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserHotelingGuestGetRequest14.
 *         Replaced by: UserHotelingGuestGetResponse14sp4
 */
class UserHotelingGuestGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $isActive                   = null;
    protected $associationLimitHours      = null;
    protected $hostUserId                 = null;
    protected $hostLastName               = null;
    protected $hostFirstName              = null;
    protected $hostAssociationDateTime    = null;
    protected $hostAssociationLimitHours  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
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

    public function setHostLastName($hostLastName = null)
    {
        $this->hostLastName = ($hostLastName InstanceOf LastName)
             ? $hostLastName
             : new LastName($hostLastName);
    }

    public function getHostLastName()
    {
        return (!$this->hostLastName) ?: $this->hostLastName->value();
    }

    public function setHostFirstName($hostFirstName = null)
    {
        $this->hostFirstName = ($hostFirstName InstanceOf FirstName)
             ? $hostFirstName
             : new FirstName($hostFirstName);
    }

    public function getHostFirstName()
    {
        return (!$this->hostFirstName) ?: $this->hostFirstName->value();
    }

    public function setHostAssociationDateTime(xs:dateTime $hostAssociationDateTime = null)
    {
    }

    public function getHostAssociationDateTime()
    {
        return (!$this->hostAssociationDateTime) ?: $this->hostAssociationDateTime->value();
    }

    public function setHostAssociationLimitHours($hostAssociationLimitHours = null)
    {
        $this->hostAssociationLimitHours = ($hostAssociationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $hostAssociationLimitHours
             : new HotelingAssociationLimitHours($hostAssociationLimitHours);
    }

    public function getHostAssociationLimitHours()
    {
        return (!$this->hostAssociationLimitHours) ?: $this->hostAssociationLimitHours->value();
    }
}
