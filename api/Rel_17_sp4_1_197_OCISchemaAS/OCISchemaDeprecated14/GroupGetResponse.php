<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupGetRequest.
 *         The response contains the group's profile information.
 *         Replaced By: GroupGetResponse14sp7
 */
class GroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'GroupGetResponse';
    protected $defaultDomain       = null;
    protected $userLimit           = null;
    protected $userCount           = null;
    protected $groupName           = null;
    protected $callingLineIdName   = null;
    protected $timeZone            = null;
    protected $timeZoneDisplayName = null;
    protected $locationDialingCode = null;
    protected $contact             = null;
    protected $address             = null;

    /**
     * @return GroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        if (!$defaultDomain) return $this;
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain->getValue();
    }

    /**
     * 
     */
    public function setUserLimit($userLimit = null)
    {
        if (!$userLimit) return $this;
        $this->userLimit = ($userLimit InstanceOf GroupUserLimit)
             ? $userLimit
             : new GroupUserLimit($userLimit);
        $this->userLimit->setName('userLimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLimit
     */
    public function getUserLimit()
    {
        return $this->userLimit->getValue();
    }

    /**
     * 
     */
    public function setUserCount($userCount = null)
    {
        if (!$userCount) return $this;
        $this->userCount = new PrimitiveType($userCount);
        $this->userCount->setName('userCount');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getUserCount()
    {
        return $this->userCount->getValue();
    }

    /**
     * 
     */
    public function setGroupName($groupName = null)
    {
        if (!$groupName) return $this;
        $this->groupName = ($groupName InstanceOf GroupName)
             ? $groupName
             : new GroupName($groupName);
        $this->groupName->setName('groupName');
        return $this;
    }

    /**
     * 
     * @return GroupName
     */
    public function getGroupName()
    {
        return $this->groupName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdName($callingLineIdName = null)
    {
        if (!$callingLineIdName) return $this;
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
        $this->callingLineIdName->setName('callingLineIdName');
        return $this;
    }

    /**
     * 
     * @return GroupCallingLineIdName
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName->getValue();
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        if (!$timeZone) return $this;
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
        $this->timeZone->setName('timeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone->getValue();
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        if (!$timeZoneDisplayName) return $this;
        $this->timeZoneDisplayName = ($timeZoneDisplayName InstanceOf TimeZoneDisplayName)
             ? $timeZoneDisplayName
             : new TimeZoneDisplayName($timeZoneDisplayName);
        $this->timeZoneDisplayName->setName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return TimeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName->getValue();
    }

    /**
     * 
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        if (!$locationDialingCode) return $this;
        $this->locationDialingCode = ($locationDialingCode InstanceOf LocationDialingCode)
             ? $locationDialingCode
             : new LocationDialingCode($locationDialingCode);
        $this->locationDialingCode->setName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode->getValue();
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        if (!$contact) return $this;
        $this->contact = $contact;
        $this->contact->setName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        if (!$address) return $this;
        $this->address = $address;
        $this->address->setName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress
     */
    public function getAddress()
    {
        return $this->address;
    }
}
