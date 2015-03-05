<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the profile for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $defaultDomain=null,
             $userLimit=null,
             $groupName=null,
             $callingLineIdName=null,
             $callingLineIdPhoneNumber=null,
             $timeZone=null,
             $locationDialingCode=null,
             Contact $contact=null,
             StreetAddress $address=null
    ) {
        $this->serviceProviderId        = new ServiceProviderId($serviceProviderId);
        $this->groupId                  = new GroupId($groupId);
        $this->defaultDomain            = new NetAddress($defaultDomain);
        $this->userLimit                = $userLimit;
        $this->groupName                = new GroupName($groupName);
        $this->callingLineIdName        = new GroupCallingLineIdName($callingLineIdName);
        $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
        $this->timeZone                 = new TimeZone($timeZone);
        $this->locationDialingCode      = new LocationDialingCode($locationDialingCode);
        $this->contact                  = $contact;
        $this->address                  = $address;
        $this->args                     = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
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

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $callingLineIdPhoneNumber and $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setTimeZone($timeZone)
    {
        $timeZone and $this->timeZone = new TimeZone($timeZone);
    }

    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->value();
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
