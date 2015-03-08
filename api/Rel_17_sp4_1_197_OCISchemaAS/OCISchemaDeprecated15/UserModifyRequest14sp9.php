<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementSIPAliasList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a user. The response is either
 *         SuccessResponse or ErrorResponse.
 *         Replaced by: UserModifyRequest16
 */
class UserModifyRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $userId                   = null;
    protected $lastName                 = null;
    protected $firstName                = null;
    protected $callingLineIdLastName    = null;
    protected $callingLineIdFirstName   = null;
    protected $hiraganaLastName         = null;
    protected $hiraganaFirstName        = null;
    protected $phoneNumber              = null;
    protected $extension                = null;
    protected $callingLineIdPhoneNumber = null;
    protected $oldPassword              = null;
    protected $newPassword              = null;
    protected $department               = null;
    protected $language                 = null;
    protected $timeZone                 = null;
    protected $sipAliasList             = null;
    protected $endpoint                 = null;
    protected $title                    = null;
    protected $pagerPhoneNumber         = null;
    protected $mobilePhoneNumber        = null;
    protected $emailAddress             = null;
    protected $yahooId                  = null;
    protected $addressLocation          = null;
    protected $address                  = null;
    protected $networkClassOfService    = null;

    public function __construct(
         $userId,
         $lastName = null,
         $firstName = null,
         $callingLineIdLastName = null,
         $callingLineIdFirstName = null,
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $phoneNumber = null,
         $extension = null,
         $callingLineIdPhoneNumber = null,
         $oldPassword = null,
         $newPassword = null,
          $department = null,
         $language = null,
         $timeZone = null,
          $sipAliasList = null,
         $endpoint = null,
         $title = null,
         $pagerPhoneNumber = null,
         $mobilePhoneNumber = null,
         $emailAddress = null,
         $yahooId = null,
         $addressLocation = null,
          $address = null,
         $networkClassOfService = null
    ) {
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
        $this->setOldPassword($oldPassword);
        $this->setNewPassword($newPassword);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setSipAliasList($sipAliasList);
        $this->setEndpoint($endpoint);
        $this->setTitle($title);
        $this->setPagerPhoneNumber($pagerPhoneNumber);
        $this->setMobilePhoneNumber($mobilePhoneNumber);
        $this->setEmailAddress($emailAddress);
        $this->setYahooId($yahooId);
        $this->setAddressLocation($addressLocation);
        $this->setAddress($address);
        $this->setNetworkClassOfService($networkClassOfService);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
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
     * 
     */
    public function setOldPassword($oldPassword = null)
    {
        $this->oldPassword = ($oldPassword InstanceOf Password)
             ? $oldPassword
             : new Password($oldPassword);
    }

    /**
     * 
     */
    public function getOldPassword()
    {
        return (!$this->oldPassword) ?: $this->oldPassword->getValue();
    }

    /**
     * 
     */
    public function setNewPassword($newPassword = null)
    {
        $this->newPassword = ($newPassword InstanceOf Password)
             ? $newPassword
             : new Password($newPassword);
    }

    /**
     * 
     */
    public function getNewPassword()
    {
        return (!$this->newPassword) ?: $this->newPassword->getValue();
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
     * A list of SIP aliases that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setSipAliasList(ReplacementSIPAliasList $sipAliasList = null)
    {
        $this->sipAliasList =  $sipAliasList;
    }

    /**
     * A list of SIP aliases that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getSipAliasList()
    {
        return (!$this->sipAliasList) ?: $this->sipAliasList->getValue();
    }

    /**
     * 
     */
    public function setEndpoint($endpoint = null)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * 
     */
    public function getEndpoint()
    {
        return (!$this->endpoint) ?: $this->endpoint->getValue();
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
