<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementSIPAliasList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a user. 
 *         When oldPassword is specified, all password rule applies. If oldPassword in not specified,
 *         any password rule related to old password does not apply.         
 *         The request will fail if officeZoneName or primaryZoneName is present but the Location-Based Calling Restrictions service is not assigned to the user.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following data elements are only used in AS data mode:
 *           contact[2]-contact[5]
 */
class UserModifyRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
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
    protected $oldPassword               = null;
    protected $newPassword               = null;
    protected $department                = null;
    protected $language                  = null;
    protected $timeZone                  = null;
    protected $sipAliasList              = null;
    protected $endpoint                  = null;
    protected $title                     = null;
    protected $pagerPhoneNumber          = null;
    protected $mobilePhoneNumber         = null;
    protected $emailAddress              = null;
    protected $yahooId                   = null;
    protected $addressLocation           = null;
    protected $address                   = null;
    protected $networkClassOfService     = null;
    protected $officeZoneName            = null;
    protected $primaryZoneName           = null;

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
         DepartmentKey $department = null,
         $language = null,
         $timeZone = null,
         ReplacementSIPAliasList $sipAliasList = null,
         $endpoint = null,
         $title = null,
         $pagerPhoneNumber = null,
         $mobilePhoneNumber = null,
         $emailAddress = null,
         $yahooId = null,
         $addressLocation = null,
         StreetAddress $address = null,
         $networkClassOfService = null,
         $officeZoneName = null,
         $primaryZoneName = null
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
        $this->setOfficeZoneName($officeZoneName);
        $this->setPrimaryZoneName($primaryZoneName);
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

    public function setOldPassword($oldPassword = null)
    {
        $this->oldPassword = ($oldPassword InstanceOf Password)
             ? $oldPassword
             : new Password($oldPassword);
    }

    public function getOldPassword()
    {
        return (!$this->oldPassword) ?: $this->oldPassword->value();
    }

    public function setNewPassword($newPassword = null)
    {
        $this->newPassword = ($newPassword InstanceOf Password)
             ? $newPassword
             : new Password($newPassword);
    }

    public function getNewPassword()
    {
        return (!$this->newPassword) ?: $this->newPassword->value();
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

    public function setSipAliasList(ReplacementSIPAliasList $sipAliasList = null)
    {
    }

    public function getSipAliasList()
    {
        return (!$this->sipAliasList) ?: $this->sipAliasList->value();
    }

    public function setEndpoint(ReplacementSIPAliasList $endpoint = null)
    {
        $this->endpoint = $endpoint;
    }

    public function getEndpoint()
    {
        return (!$this->endpoint) ?: $this->endpoint->value();
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

    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
    }

    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->value();
    }

    public function setPrimaryZoneName($primaryZoneName = null)
    {
        $this->primaryZoneName = ($primaryZoneName InstanceOf ZoneName)
             ? $primaryZoneName
             : new ZoneName($primaryZoneName);
    }

    public function getPrimaryZoneName()
    {
        return (!$this->primaryZoneName) ?: $this->primaryZoneName->value();
    }
}
