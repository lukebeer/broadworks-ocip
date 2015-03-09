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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserGetResponse15sp2;
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
    public    $name                     = __CLASS__;
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->getValue();
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->getValue();
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->getValue();
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->getValue();
    }

    /**
     * Hiragana Last Name.
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = ($hiraganaLastName InstanceOf HiraganaLastName)
             ? $hiraganaLastName
             : new HiraganaLastName($hiraganaLastName);
    }

    /**
     * Hiragana Last Name.
     */
    public function getHiraganaLastName()
    {
        return (!$this->hiraganaLastName) ?: $this->hiraganaLastName->getValue();
    }

    /**
     * Hiragana First Name.
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = ($hiraganaFirstName InstanceOf HiraganaFirstName)
             ? $hiraganaFirstName
             : new HiraganaFirstName($hiraganaFirstName);
    }

    /**
     * Hiragana First Name.
     */
    public function getHiraganaFirstName()
    {
        return (!$this->hiraganaFirstName) ?: $this->hiraganaFirstName->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * DEPRECATION NOTE: This is only used by deprecated R16 and R14 commands.
     *         Extension.
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension)
             ? $extension
             : new Extension($extension);
    }

    /**
     * DEPRECATION NOTE: This is only used by deprecated R16 and R14 commands.
     *         Extension.
     */
    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->getValue();
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
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department =  $department;
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->getValue();
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
    }

    /**
     * Department Full Path name. This the full path name of the department.
     */
    public function getDepartmentFullPath()
    {
        return (!$this->departmentFullPath) ?: $this->departmentFullPath->getValue();
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->getValue();
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
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setDefaultAlias($defaultAlias = null)
    {
        $this->defaultAlias = ($defaultAlias InstanceOf SIPURI)
             ? $defaultAlias
             : new SIPURI($defaultAlias);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getDefaultAlias()
    {
        return (!$this->defaultAlias) ?: $this->defaultAlias->getValue();
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setAlias($alias = null)
    {
        $this->alias = ($alias InstanceOf SIPURI)
             ? $alias
             : new SIPURI($alias);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getAlias()
    {
        return (!$this->alias) ?: $this->alias->getValue();
    }

    /**
     * Title.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf Title)
             ? $title
             : new Title($title);
    }

    /**
     * Title.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * A no validation DN field.  To be phased out, not for new
     *         attributes.
     */
    public function setPagerPhoneNumber($pagerPhoneNumber = null)
    {
        $this->pagerPhoneNumber = ($pagerPhoneNumber InstanceOf InformationalDN)
             ? $pagerPhoneNumber
             : new InformationalDN($pagerPhoneNumber);
    }

    /**
     * A no validation DN field.  To be phased out, not for new
     *         attributes.
     */
    public function getPagerPhoneNumber()
    {
        return (!$this->pagerPhoneNumber) ?: $this->pagerPhoneNumber->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf OutgoingDN)
             ? $mobilePhoneNumber
             : new OutgoingDN($mobilePhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->getValue();
    }

    /**
     * Email Address
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = ($emailAddress InstanceOf EmailAddress)
             ? $emailAddress
             : new EmailAddress($emailAddress);
    }

    /**
     * Email Address
     */
    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->getValue();
    }

    /**
     * Yahoo Id.
     */
    public function setYahooId($yahooId = null)
    {
        $this->yahooId = ($yahooId InstanceOf YahooId)
             ? $yahooId
             : new YahooId($yahooId);
    }

    /**
     * Yahoo Id.
     */
    public function getYahooId()
    {
        return (!$this->yahooId) ?: $this->yahooId->getValue();
    }

    /**
     * Address Location.
     */
    public function setAddressLocation($addressLocation = null)
    {
        $this->addressLocation = ($addressLocation InstanceOf AddressLocation)
             ? $addressLocation
             : new AddressLocation($addressLocation);
    }

    /**
     * Address Location.
     */
    public function getAddressLocation()
    {
        return (!$this->addressLocation) ?: $this->addressLocation->getValue();
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

    /**
     * Country dialing code.
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    /**
     * Country dialing code.
     */
    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->getValue();
    }

    /**
     * The national prefix dialing digits.
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
    }

    /**
     * The national prefix dialing digits.
     */
    public function getNationalPrefix()
    {
        return (!$this->nationalPrefix) ?: $this->nationalPrefix->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }
}
