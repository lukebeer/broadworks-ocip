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
 *         Replaced By: UserSharedCallAppearanceAddEndpointRequest14sp2
 */
class UserHotelingGuestGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $isActive                = null;
    protected $associationLimitHours   = null;
    protected $hostUserId              = null;
    protected $hostLastName            = null;
    protected $hostFirstName           = null;
    protected $hostAssociationDateTime = null;


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
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
    }

    /**
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setHostUserId($hostUserId = null)
    {
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getHostUserId()
    {
        return (!$this->hostUserId) ?: $this->hostUserId->getValue();
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function setHostLastName($hostLastName = null)
    {
        $this->hostLastName = ($hostLastName InstanceOf LastName)
             ? $hostLastName
             : new LastName($hostLastName);
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function getHostLastName()
    {
        return (!$this->hostLastName) ?: $this->hostLastName->getValue();
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function setHostFirstName($hostFirstName = null)
    {
        $this->hostFirstName = ($hostFirstName InstanceOf FirstName)
             ? $hostFirstName
             : new FirstName($hostFirstName);
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function getHostFirstName()
    {
        return (!$this->hostFirstName) ?: $this->hostFirstName->getValue();
    }

    /**
     * 
     */
    public function setHostAssociationDateTime(xs:dateTime $hostAssociationDateTime = null)
    {
        $this->hostAssociationDateTime =  $hostAssociationDateTime;
    }

    /**
     * 
     */
    public function getHostAssociationDateTime()
    {
        return (!$this->hostAssociationDateTime) ?: $this->hostAssociationDateTime->getValue();
    }
}
