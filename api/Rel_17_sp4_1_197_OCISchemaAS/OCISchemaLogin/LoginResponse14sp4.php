<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * LoginRequest14sp4/Response14sp4 is 2nd stage of the 2 stage OCI login process.
 */
class LoginResponse14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginResponse14sp4';
    public    $name                = __CLASS__;
    protected $loginType           = null;
    protected $locale              = null;
    protected $encoding            = null;
    protected $groupId             = null;
    protected $serviceProviderId   = null;
    protected $isEnterprise        = null;
    protected $passwordExpiresDays = null;
    protected $userDomain          = null;


    /**
     * The login type of the admin/user.
     */
    public function setLoginType($loginType = null)
    {
        $this->loginType = ($loginType InstanceOf LoginType)
             ? $loginType
             : new LoginType($loginType);
    }

    /**
     * The login type of the admin/user.
     */
    public function getLoginType()
    {
        return (!$this->loginType) ?: $this->loginType->getValue();
    }

    /**
     * (ISO Language Code)_(ISO Country Code) or (ISO Language Code) only.
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
    }

    /**
     * (ISO Language Code)_(ISO Country Code) or (ISO Language Code) only.
     */
    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->getValue();
    }

    /**
     * Character-encoding scheme.
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
    }

    /**
     * Character-encoding scheme.
     */
    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->getValue();
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
     * 
     */
    public function setIsEnterprise($isEnterprise = null)
    {
        $this->isEnterprise = (boolean) $isEnterprise;
    }

    /**
     * 
     */
    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->getValue();
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = (int) $passwordExpiresDays;
    }

    /**
     * 
     */
    public function getPasswordExpiresDays()
    {
        return (!$this->passwordExpiresDays) ?: $this->passwordExpiresDays->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setUserDomain($userDomain = null)
    {
        $this->userDomain = ($userDomain InstanceOf NetAddress)
             ? $userDomain
             : new NetAddress($userDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getUserDomain()
    {
        return (!$this->userDomain) ?: $this->userDomain->getValue();
    }
}