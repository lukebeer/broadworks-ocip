<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHotelingHost; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserHotelingHostGetRequest17.
 */
class UserHotelingHostGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $isActive                  = null;
    protected $enforceAssociationLimit   = null;
    protected $associationLimitHours     = null;
    protected $accessLevel               = null;
    protected $guestLastName             = null;
    protected $guestFirstName            = null;
    protected $guestPhoneNumber          = null;
    protected $guestExtension            = null;
    protected $guestLocationDialingCode  = null;
    protected $guestAssociationDateTime  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setEnforceAssociationLimit(xs:boolean $enforceAssociationLimit = null)
    {
    }

    public function getEnforceAssociationLimit()
    {
        return (!$this->enforceAssociationLimit) ?: $this->enforceAssociationLimit->value();
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

    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
    }

    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->value();
    }

    public function setGuestLastName($guestLastName = null)
    {
        $this->guestLastName = ($guestLastName InstanceOf LastName)
             ? $guestLastName
             : new LastName($guestLastName);
    }

    public function getGuestLastName()
    {
        return (!$this->guestLastName) ?: $this->guestLastName->value();
    }

    public function setGuestFirstName($guestFirstName = null)
    {
        $this->guestFirstName = ($guestFirstName InstanceOf FirstName)
             ? $guestFirstName
             : new FirstName($guestFirstName);
    }

    public function getGuestFirstName()
    {
        return (!$this->guestFirstName) ?: $this->guestFirstName->value();
    }

    public function setGuestPhoneNumber($guestPhoneNumber = null)
    {
        $this->guestPhoneNumber = ($guestPhoneNumber InstanceOf DN)
             ? $guestPhoneNumber
             : new DN($guestPhoneNumber);
    }

    public function getGuestPhoneNumber()
    {
        return (!$this->guestPhoneNumber) ?: $this->guestPhoneNumber->value();
    }

    public function setGuestExtension($guestExtension = null)
    {
        $this->guestExtension = ($guestExtension InstanceOf Extension17)
             ? $guestExtension
             : new Extension17($guestExtension);
    }

    public function getGuestExtension()
    {
        return (!$this->guestExtension) ?: $this->guestExtension->value();
    }

    public function setGuestLocationDialingCode($guestLocationDialingCode = null)
    {
        $this->guestLocationDialingCode = ($guestLocationDialingCode InstanceOf LocationDialingCode)
             ? $guestLocationDialingCode
             : new LocationDialingCode($guestLocationDialingCode);
    }

    public function getGuestLocationDialingCode()
    {
        return (!$this->guestLocationDialingCode) ?: $this->guestLocationDialingCode->value();
    }

    public function setGuestAssociationDateTime(xs:dateTime $guestAssociationDateTime = null)
    {
    }

    public function getGuestAssociationDateTime()
    {
        return (!$this->guestAssociationDateTime) ?: $this->guestAssociationDateTime->value();
    }
}
