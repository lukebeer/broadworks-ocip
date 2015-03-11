<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserGetRequest15sp2.
 *         It is possible that the TrunkAddressingRead element is present with nothing populated in it which means the user is a trunk user.
 */
class UserGetResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserGetResponse15sp2';
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $lastName                 = null;
    protected $firstName                = null;
    protected $callingLineIdLastName    = null;
    protected $callingLineIdFirstName   = null;
    protected $hiraganaLastName         = null;
    protected $hiraganaFirstName        = null;
    protected $phoneNumber              = null;
    protected $extension                = null;
    protected $callingLineIdPhoneNumber = null;
    protected $department               = null;
    protected $departmentFullPath       = null;
    protected $language                 = null;
    protected $timeZone                 = null;
    protected $timeZoneDisplayName      = null;
    protected $defaultAlias             = null;
    protected $alias                    = null;
    protected $title                    = null;
    protected $pagerPhoneNumber         = null;
    protected $mobilePhoneNumber        = null;
    protected $emailAddress             = null;
    protected $yahooId                  = null;
    protected $addressLocation          = null;
    protected $address                  = null;
    protected $countryCode              = null;
    protected $nationalPrefix           = null;
    protected $networkClassOfService    = null;

    /**
     * @return UserGetResponse15sp2
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
     * @return ServiceProviderId
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
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        if (!$lastName) return $this;
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return LastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        if (!$firstName) return $this;
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return FirstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        if (!$callingLineIdLastName) return $this;
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        if (!$callingLineIdFirstName) return $this;
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName->getValue();
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        if (!$hiraganaLastName) return $this;
        $this->hiraganaLastName = ($hiraganaLastName InstanceOf HiraganaLastName)
             ? $hiraganaLastName
             : new HiraganaLastName($hiraganaLastName);
        $this->hiraganaLastName->setName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return HiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName->getValue();
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        if (!$hiraganaFirstName) return $this;
        $this->hiraganaFirstName = ($hiraganaFirstName InstanceOf HiraganaFirstName)
             ? $hiraganaFirstName
             : new HiraganaFirstName($hiraganaFirstName);
        $this->hiraganaFirstName->setName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return HiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        if (!$extension) return $this;
        $this->extension = ($extension InstanceOf Extension)
             ? $extension
             : new Extension($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension
     */
    public function getExtension()
    {
        return $this->extension->getValue();
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
     * @return DN
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        if (!$department) return $this;
        $this->department = $department;
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        if (!$departmentFullPath) return $this;
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
        $this->departmentFullPath->setName('departmentFullPath');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath->getValue();
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language->getValue();
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
    public function setDefaultAlias($defaultAlias = null)
    {
        if (!$defaultAlias) return $this;
        $this->defaultAlias = ($defaultAlias InstanceOf SIPURI)
             ? $defaultAlias
             : new SIPURI($defaultAlias);
        $this->defaultAlias->setName('defaultAlias');
        return $this;
    }

    /**
     * 
     * @return SIPURI
     */
    public function getDefaultAlias()
    {
        return $this->defaultAlias->getValue();
    }

    /**
     * 
     */
    public function setAlias($alias = null)
    {
        if (!$alias) return $this;
        $this->alias = ($alias InstanceOf SIPURI)
             ? $alias
             : new SIPURI($alias);
        $this->alias->setName('alias');
        return $this;
    }

    /**
     * 
     * @return SIPURI
     */
    public function getAlias()
    {
        return $this->alias->getValue();
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        if (!$title) return $this;
        $this->title = ($title InstanceOf Title)
             ? $title
             : new Title($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return Title
     */
    public function getTitle()
    {
        return $this->title->getValue();
    }

    /**
     * 
     */
    public function setPagerPhoneNumber($pagerPhoneNumber = null)
    {
        if (!$pagerPhoneNumber) return $this;
        $this->pagerPhoneNumber = ($pagerPhoneNumber InstanceOf InformationalDN)
             ? $pagerPhoneNumber
             : new InformationalDN($pagerPhoneNumber);
        $this->pagerPhoneNumber->setName('pagerPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return InformationalDN
     */
    public function getPagerPhoneNumber()
    {
        return $this->pagerPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        if (!$mobilePhoneNumber) return $this;
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf OutgoingDN)
             ? $mobilePhoneNumber
             : new OutgoingDN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        if (!$emailAddress) return $this;
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
        $this->emailAddress->setName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress->getValue();
    }

    /**
     * 
     */
    public function setYahooId($yahooId = null)
    {
        if (!$yahooId) return $this;
        $this->yahooId = ($yahooId InstanceOf YahooId)
             ? $yahooId
             : new YahooId($yahooId);
        $this->yahooId->setName('yahooId');
        return $this;
    }

    /**
     * 
     * @return YahooId
     */
    public function getYahooId()
    {
        return $this->yahooId->getValue();
    }

    /**
     * 
     */
    public function setAddressLocation($addressLocation = null)
    {
        if (!$addressLocation) return $this;
        $this->addressLocation = ($addressLocation InstanceOf AddressLocation)
             ? $addressLocation
             : new AddressLocation($addressLocation);
        $this->addressLocation->setName('addressLocation');
        return $this;
    }

    /**
     * 
     * @return AddressLocation
     */
    public function getAddressLocation()
    {
        return $this->addressLocation->getValue();
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

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        if (!$nationalPrefix) return $this;
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix->getValue();
    }

    /**
     * 
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        if (!$networkClassOfService) return $this;
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
        $this->networkClassOfService->setName('networkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService->getValue();
    }
}
