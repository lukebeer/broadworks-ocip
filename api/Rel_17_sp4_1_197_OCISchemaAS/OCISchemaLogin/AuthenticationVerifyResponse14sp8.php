<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to AuthenticationVerifyRequest14sp8
 *         If a phoneNumber is returned, it will be the primay DN of the user
 */
class AuthenticationVerifyResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $loginType,
             $locale,
             $encoding,
             $groupId=null,
             $serviceProviderId=null,
             $isEnterprise,
             $passwordExpiresDays=null,
             $lastName=null,
             $firstName=null,
             $userId,
             $phoneNumber=null
    ) {
        $this->loginType           = new LoginType($loginType);
        $this->locale              = new OCILocale($locale);
        $this->encoding            = new Encoding($encoding);
        $this->groupId             = new GroupId($groupId);
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->isEnterprise        = $isEnterprise;
        $this->passwordExpiresDays = $passwordExpiresDays;
        $this->lastName            = new LastName($lastName);
        $this->firstName           = new FirstName($firstName);
        $this->userId              = new UserId($userId);
        $this->phoneNumber         = new DN($phoneNumber);
        $this->args                = func_get_args();
    }

    public function setLoginType($loginType)
    {
        $loginType and $this->loginType = new LoginType($loginType);
    }

    public function getLoginType()
    {
        return (!$this->loginType) ?: $this->loginType->value();
    }

    public function setLocale($locale)
    {
        $locale and $this->locale = new OCILocale($locale);
    }

    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->value();
    }

    public function setEncoding($encoding)
    {
        $encoding and $this->encoding = new Encoding($encoding);
    }

    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setIsEnterprise($isEnterprise)
    {
        $isEnterprise and $this->isEnterprise = new xs:boolean($isEnterprise);
    }

    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->value();
    }

    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $passwordExpiresDays and $this->passwordExpiresDays = new xs:int($passwordExpiresDays);
    }

    public function getPasswordExpiresDays()
    {
        return (!$this->passwordExpiresDays) ?: $this->passwordExpiresDays->value();
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

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }
}
