<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserGetRequest14sp9.
 */
class UserGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserGetResponse14sp9';
    protected $serviceProviderId;
    protected $groupId;
    protected $lastName;
    protected $firstName;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $hiraganaLastName;
    protected $hiraganaFirstName;
    protected $phoneNumber;
    protected $extension;
    protected $callingLineIdPhoneNumber;
    protected $department;
    protected $departmentFullPath;
    protected $language;
    protected $timeZone;
    protected $timeZoneDisplayName;
    protected $defaultAlias;
    protected $alias;
    protected $title;
    protected $pagerPhoneNumber;
    protected $mobilePhoneNumber;
    protected $emailAddress;
    protected $yahooId;
    protected $addressLocation;
    protected $address;
    protected $countryCode;
    protected $nationalPrefix;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserGetResponse14sp9 $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
        $this->lastName->setElementName('lastName');
        return $this;
    }

    /**
     * 
     * @return LastName $lastName
     */
    public function getLastName()
    {
        return ($this->lastName)
            ? $this->lastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
        $this->firstName->setElementName('firstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $firstName
     */
    public function getFirstName()
    {
        return ($this->firstName)
            ? $this->firstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdLastName->setElementName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdLastName $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName)
            ? $this->callingLineIdLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdFirstName->setElementName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdFirstName $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName)
            ? $this->callingLineIdFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = ($hiraganaLastName InstanceOf HiraganaLastName)
             ? $hiraganaLastName
             : new HiraganaLastName($hiraganaLastName);
        $this->hiraganaLastName->setElementName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return HiraganaLastName $hiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return ($this->hiraganaLastName)
            ? $this->hiraganaLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = ($hiraganaFirstName InstanceOf HiraganaFirstName)
             ? $hiraganaFirstName
             : new HiraganaFirstName($hiraganaFirstName);
        $this->hiraganaFirstName->setElementName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return HiraganaFirstName $hiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return ($this->hiraganaFirstName)
            ? $this->hiraganaFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension)
             ? $extension
             : new Extension($extension);
        $this->extension->setElementName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension $extension
     */
    public function getExtension()
    {
        return ($this->extension)
            ? $this->extension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setElementName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return ($this->callingLineIdPhoneNumber)
            ? $this->callingLineIdPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setElementName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
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
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
        $this->departmentFullPath->setElementName('departmentFullPath');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName $departmentFullPath
     */
    public function getDepartmentFullPath()
    {
        return ($this->departmentFullPath)
            ? $this->departmentFullPath->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setElementName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return ($this->language)
            ? $this->language->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
        $this->timeZone->setElementName('timeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone)
            ? $this->timeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        $this->timeZoneDisplayName = ($timeZoneDisplayName InstanceOf TimeZoneDisplayName)
             ? $timeZoneDisplayName
             : new TimeZoneDisplayName($timeZoneDisplayName);
        $this->timeZoneDisplayName->setElementName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return TimeZoneDisplayName $timeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return ($this->timeZoneDisplayName)
            ? $this->timeZoneDisplayName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultAlias($defaultAlias = null)
    {
        $this->defaultAlias = ($defaultAlias InstanceOf SIPURI)
             ? $defaultAlias
             : new SIPURI($defaultAlias);
        $this->defaultAlias->setElementName('defaultAlias');
        return $this;
    }

    /**
     * 
     * @return SIPURI $defaultAlias
     */
    public function getDefaultAlias()
    {
        return ($this->defaultAlias)
            ? $this->defaultAlias->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlias($alias = null)
    {
        $this->alias = ($alias InstanceOf SIPURI)
             ? $alias
             : new SIPURI($alias);
        $this->alias->setElementName('alias');
        return $this;
    }

    /**
     * 
     * @return SIPURI $alias
     */
    public function getAlias()
    {
        return ($this->alias)
            ? $this->alias->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf Title)
             ? $title
             : new Title($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return Title $title
     */
    public function getTitle()
    {
        return ($this->title)
            ? $this->title->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPagerPhoneNumber($pagerPhoneNumber = null)
    {
        $this->pagerPhoneNumber = ($pagerPhoneNumber InstanceOf InformationalDN)
             ? $pagerPhoneNumber
             : new InformationalDN($pagerPhoneNumber);
        $this->pagerPhoneNumber->setElementName('pagerPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return InformationalDN $pagerPhoneNumber
     */
    public function getPagerPhoneNumber()
    {
        return ($this->pagerPhoneNumber)
            ? $this->pagerPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf OutgoingDN)
             ? $mobilePhoneNumber
             : new OutgoingDN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setElementName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $mobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return ($this->mobilePhoneNumber)
            ? $this->mobilePhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
        $this->emailAddress->setElementName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $emailAddress
     */
    public function getEmailAddress()
    {
        return ($this->emailAddress)
            ? $this->emailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setYahooId($yahooId = null)
    {
        $this->yahooId = ($yahooId InstanceOf YahooId)
             ? $yahooId
             : new YahooId($yahooId);
        $this->yahooId->setElementName('yahooId');
        return $this;
    }

    /**
     * 
     * @return YahooId $yahooId
     */
    public function getYahooId()
    {
        return ($this->yahooId)
            ? $this->yahooId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAddressLocation($addressLocation = null)
    {
        $this->addressLocation = ($addressLocation InstanceOf AddressLocation)
             ? $addressLocation
             : new AddressLocation($addressLocation);
        $this->addressLocation->setElementName('addressLocation');
        return $this;
    }

    /**
     * 
     * @return AddressLocation $addressLocation
     */
    public function getAddressLocation()
    {
        return ($this->addressLocation)
            ? $this->addressLocation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = ($address InstanceOf StreetAddress)
             ? $address
             : new StreetAddress($address);
        $this->address->setElementName('address');
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

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setElementName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $nationalPrefix
     */
    public function getNationalPrefix()
    {
        return ($this->nationalPrefix)
            ? $this->nationalPrefix->getElementValue()
            : null;
    }
}
