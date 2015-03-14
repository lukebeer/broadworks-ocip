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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the profile for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupModifyRequest';
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $defaultDomain            = null;
    protected $userLimit                = null;
    protected $groupName                = null;
    protected $callingLineIdName        = null;
    protected $callingLineIdPhoneNumber = null;
    protected $timeZone                 = null;
    protected $locationDialingCode      = null;
    protected $contact                  = null;
    protected $address                  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $defaultDomain = null,
         $userLimit = null,
         $groupName = null,
         $callingLineIdName = null,
         $callingLineIdPhoneNumber = null,
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
        $this->setCallingLineIdPhoneNumber($callingLineIdPhoneNumber);
        $this->setTimeZone($timeZone);
        $this->setLocationDialingCode($locationDialingCode);
        $this->setContact($contact);
        $this->setAddress($address);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
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
     * @return NetAddress $defaultDomain
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
     * @return GroupUserLimit $userLimit
     */
    public function getUserLimit()
    {
        return $this->userLimit->getValue();
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
     * @return GroupName $groupName
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
     * @return GroupCallingLineIdName $callingLineIdName
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if (!$callingLineIdPhoneNumber) return $this;
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber->getValue();
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
     * @return TimeZone $timeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone->getValue();
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
     * @return LocationDialingCode $locationDialingCode
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
     * @return Contact $contact
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
     * @return StreetAddress $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
