<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to AuthenticationVerifyRequest
 *         Replaced By: AuthenticationVerifyResponse14sp8
 */
class AuthenticationVerifyResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'AuthenticationVerifyResponse';
    protected $loginType           = null;
    protected $locale              = null;
    protected $encoding            = null;
    protected $groupId             = null;
    protected $serviceProviderId   = null;
    protected $isEnterprise        = null;
    protected $passwordExpiresDays = null;
    protected $userDomain          = null;
    protected $lastName            = null;
    protected $firstName           = null;

    /**
     * @return AuthenticationVerifyResponse
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
        if (!$loginType) return $this;
        $this->loginType = ($loginType InstanceOf LoginType)
             ? $loginType
             : new LoginType($loginType);
        $this->loginType->setName('loginType');
        return $this;
    }

    /**
     * 
     * @return LoginType
     */
    public function getLoginType()
    {
        return $this->loginType->getValue();
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        if (!$locale) return $this;
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale
     */
    public function getLocale()
    {
        return $this->locale->getValue();
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        if (!$encoding) return $this;
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding
     */
    public function getEncoding()
    {
        return $this->encoding->getValue();
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
    public function setIsEnterprise($isEnterprise = null)
    {
        if (!$isEnterprise) return $this;
        $this->isEnterprise = new PrimitiveType($isEnterprise);
        $this->isEnterprise->setName('isEnterprise');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise->getValue();
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        if (!$passwordExpiresDays) return $this;
        $this->passwordExpiresDays = new PrimitiveType($passwordExpiresDays);
        $this->passwordExpiresDays->setName('passwordExpiresDays');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays->getValue();
    }

    /**
     * 
     */
    public function setUserDomain($userDomain = null)
    {
        if (!$userDomain) return $this;
        $this->userDomain = ($userDomain InstanceOf NetAddress)
             ? $userDomain
             : new NetAddress($userDomain);
        $this->userDomain->setName('userDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getUserDomain()
    {
        return $this->userDomain->getValue();
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
}
