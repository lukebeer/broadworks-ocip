<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupUserLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupGetResponse14sp7;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupGetRequest14sp7.
 *         The response contains the group's profile information.
 */
class GroupGetResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $defaultDomain                   = null;
    protected $userLimit                       = null;
    protected $userCount                       = null;
    protected $groupName                       = null;
    protected $callingLineIdName               = null;
    protected $callingLineIdPhoneNumber        = null;
    protected $callingLineIdDisplayPhoneNumber = null;
    protected $timeZone                        = null;
    protected $timeZoneDisplayName             = null;
    protected $locationDialingCode             = null;
    protected $contact                         = null;
    protected $address                         = null;

    /**
     * @return GroupGetResponse14sp7
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->getValue();
    }

    /**
     * Configured maximum number of users in a group.
     */
    public function setUserLimit($userLimit = null)
    {
        $this->userLimit = ($userLimit InstanceOf GroupUserLimit)
             ? $userLimit
             : new GroupUserLimit($userLimit);
    }

    /**
     * Configured maximum number of users in a group.
     */
    public function getUserLimit()
    {
        return (!$this->userLimit) ?: $this->userLimit->getValue();
    }

    /**
     * 
     */
    public function setUserCount($userCount = null)
    {
        $this->userCount = (int) $userCount;
    }

    /**
     * 
     */
    public function getUserCount()
    {
        return (!$this->userCount) ?: $this->userCount;
    }

    /**
     * Group display name.
     */
    public function setGroupName($groupName = null)
    {
        $this->groupName = ($groupName InstanceOf GroupName)
             ? $groupName
             : new GroupName($groupName);
    }

    /**
     * Group display name.
     */
    public function getGroupName()
    {
        return (!$this->groupName) ?: $this->groupName->getValue();
    }

    /**
     * Group calling line ID name.
     */
    public function setCallingLineIdName($callingLineIdName = null)
    {
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
    }

    /**
     * Group calling line ID name.
     */
    public function getCallingLineIdName()
    {
        return (!$this->callingLineIdName) ?: $this->callingLineIdName->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setCallingLineIdDisplayPhoneNumber($callingLineIdDisplayPhoneNumber = null)
    {
        $this->callingLineIdDisplayPhoneNumber = ($callingLineIdDisplayPhoneNumber InstanceOf DN)
             ? $callingLineIdDisplayPhoneNumber
             : new DN($callingLineIdDisplayPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getCallingLineIdDisplayPhoneNumber()
    {
        return (!$this->callingLineIdDisplayPhoneNumber) ?: $this->callingLineIdDisplayPhoneNumber->getValue();
    }

    /**
     * Time zone key.
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
    }

    /**
     * Time zone key.
     */
    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->getValue();
    }

    /**
     * Localized Time Zone Display Name
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        $this->timeZoneDisplayName = ($timeZoneDisplayName InstanceOf TimeZoneDisplayName)
             ? $timeZoneDisplayName
             : new TimeZoneDisplayName($timeZoneDisplayName);
    }

    /**
     * Localized Time Zone Display Name
     */
    public function getTimeZoneDisplayName()
    {
        return (!$this->timeZoneDisplayName) ?: $this->timeZoneDisplayName->getValue();
    }

    /**
     * Group location dialing code for groups that are part of a enterprise.
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf LocationDialingCode)
             ? $locationDialingCode
             : new LocationDialingCode($locationDialingCode);
    }

    /**
     * Group location dialing code for groups that are part of a enterprise.
     */
    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->getValue();
    }

    /**
     * Contact information.
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact =  $contact;
    }

    /**
     * Contact information.
     */
    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->getValue();
    }

    /**
     * Street address information.
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address =  $address;
    }

    /**
     * Street address information.
     */
    public function getAddress()
    {
        return (!$this->address) ?: $this->address->getValue();
    }
}
