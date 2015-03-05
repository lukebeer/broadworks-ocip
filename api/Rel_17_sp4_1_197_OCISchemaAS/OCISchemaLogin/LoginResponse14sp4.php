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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * LoginRequest14sp4/Response14sp4 is 2nd stage of the 2 stage OCI login process.
 */
class LoginResponse14sp4 extends ComplexType implements ComplexInterface
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
             $userDomain
    ) {
        $this->loginType           = new LoginType($loginType);
        $this->locale              = new OCILocale($locale);
        $this->encoding            = new Encoding($encoding);
        $this->groupId             = new GroupId($groupId);
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->isEnterprise        = $isEnterprise;
        $this->passwordExpiresDays = $passwordExpiresDays;
        $this->userDomain          = new NetAddress($userDomain);
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

    public function setUserDomain($userDomain)
    {
        $userDomain and $this->userDomain = new NetAddress($userDomain);
    }

    public function getUserDomain()
    {
        return (!$this->userDomain) ?: $this->userDomain->value();
    }
}
