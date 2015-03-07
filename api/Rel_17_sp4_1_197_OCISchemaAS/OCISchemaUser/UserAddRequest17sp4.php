<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a user.
 *         The domain is required in the userId.
 *         The password is not required if external authentication is enabled.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserAddRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $userId                    = null;
    protected $lastName                  = null;
    protected $firstName                 = null;
    protected $callingLineIdLastName     = null;
    protected $callingLineIdFirstName    = null;
    protected $hiraganaLastName          = null;
    protected $hiraganaFirstName         = null;
    protected $phoneNumber               = null;
    protected $extension                 = null;
    protected $callingLineIdPhoneNumber  = null;
    protected $password                  = null;
    protected $department                = null;
    protected $language                  = null;
    protected $timeZone                  = null;
    protected $alias                     = null;
    protected $title                     = null;
    protected $pagerPhoneNumber          = null;
    protected $mobilePhoneNumber         = null;
    protected $emailAddress              = null;
    protected $yahooId                   = null;
    protected $addressLocation           = null;
    protected $address                   = null;
    protected $networkClassOfService     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $userId,
         $lastName,
         $firstName,
         $callingLineIdLastName,
         $callingLineIdFirstName,
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $phoneNumber = null,
         $extension = null,
         $callingLineIdPhoneNumber = null,
         $password = null,
         DepartmentKey $department = null,
         $language = null,
         $timeZone = null,
         $alias = null,
         $title = null,
         $pagerPhoneNumber = null,
         $mobilePhoneNumber = null,
         $emailAddress = null,
         $yahooId = null,
         $addressLocation = null,
         StreetAddress $address = null,
         $networkClassOfService = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUserId($userId);
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setCallingLineIdPhoneNumber($callingLineIdPhoneNumber);
        $this->setPassword($password);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setAlias($alias);
        $this->setTitle($title);
        $this->setPagerPhoneNumber($pagerPhoneNumber);
        $this->setMobilePhoneNumber($mobilePhoneNumber);
        $this->setEmailAddress($emailAddress);
        $this->setYahooId($yahooId);
        $this->setAddressLocation($addressLocation);
        $this->setAddress($address);
        $this->setNetworkClassOfService($networkClassOfService);
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

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
    }

    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->value();
    }

    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
    }

    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->value();
    }

    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
    }

    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->value();
    }

    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
    }

    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->value();
    }

    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = ($hiraganaLastName InstanceOf HiraganaLastName)
             ? $hiraganaLastName
             : new HiraganaLastName($hiraganaLastName);
    }

    public function getHiraganaLastName()
    {
        return (!$this->hiraganaLastName) ?: $this->hiraganaLastName->value();
    }

    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = ($hiraganaFirstName InstanceOf HiraganaFirstName)
             ? $hiraganaFirstName
             : new HiraganaFirstName($hiraganaFirstName);
    }

    public function getHiraganaFirstName()
    {
        return (!$this->hiraganaFirstName) ?: $this->hiraganaFirstName->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setDepartment(DepartmentKey $department = null)
    {
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
    }

    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->value();
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

    public function setAlias($alias = null)
    {
        $this->alias = ($alias InstanceOf SIPURI)
             ? $alias
             : new SIPURI($alias);
    }

    public function getAlias()
    {
        return (!$this->alias) ?: $this->alias->value();
    }

    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf Title)
             ? $title
             : new Title($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setPagerPhoneNumber($pagerPhoneNumber = null)
    {
        $this->pagerPhoneNumber = ($pagerPhoneNumber InstanceOf InformationalDN)
             ? $pagerPhoneNumber
             : new InformationalDN($pagerPhoneNumber);
    }

    public function getPagerPhoneNumber()
    {
        return (!$this->pagerPhoneNumber) ?: $this->pagerPhoneNumber->value();
    }

    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf OutgoingDN)
             ? $mobilePhoneNumber
             : new OutgoingDN($mobilePhoneNumber);
    }

    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->value();
    }

    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
    }

    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->value();
    }

    public function setYahooId($yahooId = null)
    {
        $this->yahooId = ($yahooId InstanceOf YahooId)
             ? $yahooId
             : new YahooId($yahooId);
    }

    public function getYahooId()
    {
        return (!$this->yahooId) ?: $this->yahooId->value();
    }

    public function setAddressLocation($addressLocation = null)
    {
        $this->addressLocation = ($addressLocation InstanceOf AddressLocation)
             ? $addressLocation
             : new AddressLocation($addressLocation);
    }

    public function getAddressLocation()
    {
        return (!$this->addressLocation) ?: $this->addressLocation->value();
    }

    public function setAddress(StreetAddress $address = null)
    {
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }
}
