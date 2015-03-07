<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderId    = null;
    protected $groupId              = null;
    protected $defaultDomain        = null;
    protected $userLimit            = null;
    protected $groupName            = null;
    protected $callingLineIdName    = null;
    protected $timeZone             = null;
    protected $locationDialingCode  = null;
    protected $contact              = null;
    protected $address              = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $defaultDomain,
         $userLimit,
         $groupName = null,
         $callingLineIdName = null,
         $timeZone = null,
         $locationDialingCode = null,
         Contact $contact = null,
         StreetAddress $address = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDefaultDomain($defaultDomain);
        $this->setUserLimit($userLimit);
        $this->setGroupName($groupName);
        $this->setCallingLineIdName($callingLineIdName);
        $this->setTimeZone($timeZone);
        $this->setLocationDialingCode($locationDialingCode);
        $this->setContact($contact);
        $this->setAddress($address);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setUserLimit($userLimit = null)
    {
        $this->userLimit = ($userLimit InstanceOf GroupUserLimit)
             ? $userLimit
             : new GroupUserLimit($userLimit);
    }

    public function getUserLimit()
    {
        return (!$this->userLimit) ?: $this->userLimit->value();
    }

    public function setGroupName($groupName = null)
    {
        $this->groupName = ($groupName InstanceOf GroupName)
             ? $groupName
             : new GroupName($groupName);
    }

    public function getGroupName()
    {
        return (!$this->groupName) ?: $this->groupName->value();
    }

    public function setCallingLineIdName($callingLineIdName = null)
    {
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
    }

    public function getCallingLineIdName()
    {
        return (!$this->callingLineIdName) ?: $this->callingLineIdName->value();
    }

    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
    }

    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->value();
    }

    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf LocationDialingCode)
             ? $locationDialingCode
             : new LocationDialingCode($locationDialingCode);
    }

    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->value();
    }

    public function setContact(Contact $contact = null)
    {
    }

    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->value();
    }

    public function setAddress(StreetAddress $address = null)
    {
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }
}
