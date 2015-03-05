<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupGetRequest.
 *         The response contains the group's profile information.
 *         Replaced By: GroupGetResponse14sp7
 */
class GroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultDomain,
             $userLimit,
             $userCount,
             $groupName=null,
             $callingLineIdName=null,
             $timeZone,
             $timeZoneDisplayName,
             $locationDialingCode=null,
             Contact $contact=null,
             StreetAddress $address=null
    ) {
        $this->defaultDomain       = new NetAddress($defaultDomain);
        $this->userLimit           = $userLimit;
        $this->userCount           = $userCount;
        $this->groupName           = new GroupName($groupName);
        $this->callingLineIdName   = new GroupCallingLineIdName($callingLineIdName);
        $this->timeZone            = new TimeZone($timeZone);
        $this->timeZoneDisplayName = new TimeZoneDisplayName($timeZoneDisplayName);
        $this->locationDialingCode = new LocationDialingCode($locationDialingCode);
        $this->contact             = $contact;
        $this->address             = $address;
        $this->args                = func_get_args();
    }

    public function setDefaultDomain($defaultDomain)
    {
        $defaultDomain and $this->defaultDomain = new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setUserLimit($userLimit)
    {
        $userLimit and $this->userLimit = new GroupUserLimit($userLimit);
    }

    public function getUserLimit()
    {
        return (!$this->userLimit) ?: $this->userLimit->value();
    }

    public function setUserCount($userCount)
    {
        $userCount and $this->userCount = new xs:int($userCount);
    }

    public function getUserCount()
    {
        return (!$this->userCount) ?: $this->userCount->value();
    }

    public function setGroupName($groupName)
    {
        $groupName and $this->groupName = new GroupName($groupName);
    }

    public function getGroupName()
    {
        return (!$this->groupName) ?: $this->groupName->value();
    }

    public function setCallingLineIdName($callingLineIdName)
    {
        $callingLineIdName and $this->callingLineIdName = new GroupCallingLineIdName($callingLineIdName);
    }

    public function getCallingLineIdName()
    {
        return (!$this->callingLineIdName) ?: $this->callingLineIdName->value();
    }

    public function setTimeZone($timeZone)
    {
        $timeZone and $this->timeZone = new TimeZone($timeZone);
    }

    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->value();
    }

    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $timeZoneDisplayName and $this->timeZoneDisplayName = new TimeZoneDisplayName($timeZoneDisplayName);
    }

    public function getTimeZoneDisplayName()
    {
        return (!$this->timeZoneDisplayName) ?: $this->timeZoneDisplayName->value();
    }

    public function setLocationDialingCode($locationDialingCode)
    {
        $locationDialingCode and $this->locationDialingCode = new LocationDialingCode($locationDialingCode);
    }

    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->value();
    }

    public function setContact($contact)
    {
        $contact and $this->contact = new Contact($contact);
    }

    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->value();
    }

    public function setAddress($address)
    {
        $address and $this->address = new StreetAddress($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }
}
