<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HiraganaFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Title;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InformationalDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\YahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AddressLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
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
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $userId,
             $lastName,
             $firstName,
             $callingLineIdLastName,
             $callingLineIdFirstName,
             $hiraganaLastName=null,
             $hiraganaFirstName=null,
             $phoneNumber=null,
             $extension=null,
             $callingLineIdPhoneNumber=null,
             $password=null,
             DepartmentKey $department=null,
             $language=null,
             $timeZone=null,
             $alias=null,
             $title=null,
             $pagerPhoneNumber=null,
             $mobilePhoneNumber=null,
             $emailAddress=null,
             $yahooId=null,
             $addressLocation=null,
             StreetAddress $address=null,
             $networkClassOfService=null
    ) {
        $this->serviceProviderId        = new ServiceProviderId($serviceProviderId);
        $this->groupId                  = new GroupId($groupId);
        $this->userId                   = new UserId($userId);
        $this->lastName                 = new LastName($lastName);
        $this->firstName                = new FirstName($firstName);
        $this->callingLineIdLastName    = new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdFirstName   = new CallingLineIdFirstName($callingLineIdFirstName);
        $this->hiraganaLastName         = new HiraganaLastName($hiraganaLastName);
        $this->hiraganaFirstName        = new HiraganaFirstName($hiraganaFirstName);
        $this->phoneNumber              = new DN($phoneNumber);
        $this->extension                = new Extension17($extension);
        $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
        $this->password                 = new Password($password);
        $this->department               = $department;
        $this->language                 = new Language($language);
        $this->timeZone                 = new TimeZone($timeZone);
        $this->alias                    = new SIPURI($alias);
        $this->title                    = new Title($title);
        $this->pagerPhoneNumber         = new InformationalDN($pagerPhoneNumber);
        $this->mobilePhoneNumber        = new OutgoingDN($mobilePhoneNumber);
        $this->emailAddress             = new EmailAddress($emailAddress);
        $this->yahooId                  = new YahooId($yahooId);
        $this->addressLocation          = new AddressLocation($addressLocation);
        $this->address                  = $address;
        $this->networkClassOfService    = new NetworkClassOfServiceName($networkClassOfService);
        $this->args                     = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setLastName($lastName)
    {
        $lastName and $this->lastName = new LastName($lastName);
    }

    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->value();
    }

    public function setFirstName($firstName)
    {
        $firstName and $this->firstName = new FirstName($firstName);
    }

    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->value();
    }

    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $callingLineIdLastName and $this->callingLineIdLastName = new CallingLineIdLastName($callingLineIdLastName);
    }

    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->value();
    }

    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $callingLineIdFirstName and $this->callingLineIdFirstName = new CallingLineIdFirstName($callingLineIdFirstName);
    }

    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->value();
    }

    public function setHiraganaLastName($hiraganaLastName)
    {
        $hiraganaLastName and $this->hiraganaLastName = new HiraganaLastName($hiraganaLastName);
    }

    public function getHiraganaLastName()
    {
        return (!$this->hiraganaLastName) ?: $this->hiraganaLastName->value();
    }

    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $hiraganaFirstName and $this->hiraganaFirstName = new HiraganaFirstName($hiraganaFirstName);
    }

    public function getHiraganaFirstName()
    {
        return (!$this->hiraganaFirstName) ?: $this->hiraganaFirstName->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setExtension($extension)
    {
        $extension and $this->extension = new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $callingLineIdPhoneNumber and $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setPassword($password)
    {
        $password and $this->password = new Password($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setDepartment($department)
    {
        $department and $this->department = new DepartmentKey($department);
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setLanguage($language)
    {
        $language and $this->language = new Language($language);
    }

    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->value();
    }

    public function setTimeZone($timeZone)
    {
        $timeZone and $this->timeZone = new TimeZone($timeZone);
    }

    public function getTimeZone()
    {
        return (!$this->timeZone) ?: $this->timeZone->value();
    }

    public function setAlias($alias)
    {
        $alias and $this->alias = new SIPURI($alias);
    }

    public function getAlias()
    {
        return (!$this->alias) ?: $this->alias->value();
    }

    public function setTitle($title)
    {
        $title and $this->title = new Title($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setPagerPhoneNumber($pagerPhoneNumber)
    {
        $pagerPhoneNumber and $this->pagerPhoneNumber = new InformationalDN($pagerPhoneNumber);
    }

    public function getPagerPhoneNumber()
    {
        return (!$this->pagerPhoneNumber) ?: $this->pagerPhoneNumber->value();
    }

    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $mobilePhoneNumber and $this->mobilePhoneNumber = new OutgoingDN($mobilePhoneNumber);
    }

    public function getMobilePhoneNumber()
    {
        return (!$this->mobilePhoneNumber) ?: $this->mobilePhoneNumber->value();
    }

    public function setEmailAddress($emailAddress)
    {
        $emailAddress and $this->emailAddress = new EmailAddress($emailAddress);
    }

    public function getEmailAddress()
    {
        return (!$this->emailAddress) ?: $this->emailAddress->value();
    }

    public function setYahooId($yahooId)
    {
        $yahooId and $this->yahooId = new YahooId($yahooId);
    }

    public function getYahooId()
    {
        return (!$this->yahooId) ?: $this->yahooId->value();
    }

    public function setAddressLocation($addressLocation)
    {
        $addressLocation and $this->addressLocation = new AddressLocation($addressLocation);
    }

    public function getAddressLocation()
    {
        return (!$this->addressLocation) ?: $this->addressLocation->value();
    }

    public function setAddress($address)
    {
        $address and $this->address = new StreetAddress($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setNetworkClassOfService($networkClassOfService)
    {
        $networkClassOfService and $this->networkClassOfService = new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }
}
