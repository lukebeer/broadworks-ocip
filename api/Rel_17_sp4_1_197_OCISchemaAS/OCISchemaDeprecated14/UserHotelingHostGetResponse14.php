<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserHotelingHostGetRequest14.
 *         Replaced by: UserHotelingHostGetResponse14sp4
 */
class UserHotelingHostGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $associationLimitHours,
             $accessLevel,
             $guestLastName=null,
             $guestFirstName=null,
             $guestPhoneNumber=null,
             $guestExtension=null,
             $guestLocationDialingCode=null,
             $guestAssociationDateTime=null
    ) {
        $this->isActive                 = $isActive;
        $this->associationLimitHours    = new HotelingAssociationLimitHours($associationLimitHours);
        $this->accessLevel              = $accessLevel;
        $this->guestLastName            = new LastName($guestLastName);
        $this->guestFirstName           = new FirstName($guestFirstName);
        $this->guestPhoneNumber         = new DN($guestPhoneNumber);
        $this->guestExtension           = new Extension($guestExtension);
        $this->guestLocationDialingCode = new LocationDialingCode($guestLocationDialingCode);
        $this->guestAssociationDateTime = $guestAssociationDateTime;
        $this->args                     = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAssociationLimitHours($associationLimitHours)
    {
        $associationLimitHours and $this->associationLimitHours = new HotelingAssociationLimitHours($associationLimitHours);
    }

    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->value();
    }

    public function setAccessLevel($accessLevel)
    {
        $accessLevel and $this->accessLevel = new HotelingHostAccessLevel($accessLevel);
    }

    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->value();
    }

    public function setGuestLastName($guestLastName)
    {
        $guestLastName and $this->guestLastName = new LastName($guestLastName);
    }

    public function getGuestLastName()
    {
        return (!$this->guestLastName) ?: $this->guestLastName->value();
    }

    public function setGuestFirstName($guestFirstName)
    {
        $guestFirstName and $this->guestFirstName = new FirstName($guestFirstName);
    }

    public function getGuestFirstName()
    {
        return (!$this->guestFirstName) ?: $this->guestFirstName->value();
    }

    public function setGuestPhoneNumber($guestPhoneNumber)
    {
        $guestPhoneNumber and $this->guestPhoneNumber = new DN($guestPhoneNumber);
    }

    public function getGuestPhoneNumber()
    {
        return (!$this->guestPhoneNumber) ?: $this->guestPhoneNumber->value();
    }

    public function setGuestExtension($guestExtension)
    {
        $guestExtension and $this->guestExtension = new Extension($guestExtension);
    }

    public function getGuestExtension()
    {
        return (!$this->guestExtension) ?: $this->guestExtension->value();
    }

    public function setGuestLocationDialingCode($guestLocationDialingCode)
    {
        $guestLocationDialingCode and $this->guestLocationDialingCode = new LocationDialingCode($guestLocationDialingCode);
    }

    public function getGuestLocationDialingCode()
    {
        return (!$this->guestLocationDialingCode) ?: $this->guestLocationDialingCode->value();
    }

    public function setGuestAssociationDateTime($guestAssociationDateTime)
    {
        $guestAssociationDateTime and $this->guestAssociationDateTime = new xs:dateTime($guestAssociationDateTime);
    }

    public function getGuestAssociationDateTime()
    {
        return (!$this->guestAssociationDateTime) ?: $this->guestAssociationDateTime->value();
    }
}
