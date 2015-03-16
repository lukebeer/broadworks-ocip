<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * LoginRequest14sp4/Response14sp4 is 2nd stage of the 2 stage OCI login process.
 */
class LoginResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'LoginResponse14sp4';
    protected $loginType;
    protected $locale;
    protected $encoding;
    protected $groupId;
    protected $serviceProviderId;
    protected $isEnterprise;
    protected $passwordExpiresDays;
    protected $userDomain;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLoginType($loginType = null)
    {
        $this->loginType = ($loginType InstanceOf LoginType)
             ? $loginType
             : new LoginType($loginType);
        $this->loginType->setName('loginType');
        return $this;
    }

    /**
     * 
     * @return LoginType $loginType
     */
    public function getLoginType()
    {
        return ($this->loginType) ? $this->loginType->getValue() : null;
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale $locale
     */
    public function getLocale()
    {
        return ($this->locale) ? $this->locale->getValue() : null;
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding $encoding
     */
    public function getEncoding()
    {
        return ($this->encoding) ? $this->encoding->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsEnterprise($isEnterprise = null)
    {
        $this->isEnterprise = new PrimitiveType($isEnterprise);
        $this->isEnterprise->setName('isEnterprise');
        return $this;
    }

    /**
     * 
     * @return boolean $isEnterprise
     */
    public function getIsEnterprise()
    {
        return ($this->isEnterprise) ? $this->isEnterprise->getValue() : null;
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = new PrimitiveType($passwordExpiresDays);
        $this->passwordExpiresDays->setName('passwordExpiresDays');
        return $this;
    }

    /**
     * 
     * @return int $passwordExpiresDays
     */
    public function getPasswordExpiresDays()
    {
        return ($this->passwordExpiresDays) ? $this->passwordExpiresDays->getValue() : null;
    }

    /**
     * 
     */
    public function setUserDomain($userDomain = null)
    {
        $this->userDomain = ($userDomain InstanceOf NetAddress)
             ? $userDomain
             : new NetAddress($userDomain);
        $this->userDomain->setName('userDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userDomain
     */
    public function getUserDomain()
    {
        return ($this->userDomain) ? $this->userDomain->getValue() : null;
    }
}
