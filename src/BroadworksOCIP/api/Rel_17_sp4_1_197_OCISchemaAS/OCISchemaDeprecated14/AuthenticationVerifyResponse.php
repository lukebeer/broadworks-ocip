<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to AuthenticationVerifyRequest
 *         Replaced By: AuthenticationVerifyResponse14sp8
 */
class AuthenticationVerifyResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AuthenticationVerifyResponse';
    protected $loginType;
    protected $locale;
    protected $encoding;
    protected $groupId;
    protected $serviceProviderId;
    protected $isEnterprise;
    protected $passwordExpiresDays;
    protected $userDomain;
    protected $lastName;
    protected $firstName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AuthenticationVerifyResponse $response
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
        $this->loginType->setElementName('loginType');
        return $this;
    }

    /**
     * 
     * @return LoginType $loginType
     */
    public function getLoginType()
    {
        return ($this->loginType)
            ? $this->loginType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setElementName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale $locale
     */
    public function getLocale()
    {
        return ($this->locale)
            ? $this->locale->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setElementName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding $encoding
     */
    public function getEncoding()
    {
        return ($this->encoding)
            ? $this->encoding->getElementValue()
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
    public function setIsEnterprise($isEnterprise = null)
    {
        $this->isEnterprise = new PrimitiveType($isEnterprise);
        $this->isEnterprise->setElementName('isEnterprise');
        return $this;
    }

    /**
     * 
     * @return boolean $isEnterprise
     */
    public function getIsEnterprise()
    {
        return ($this->isEnterprise)
            ? $this->isEnterprise->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPasswordExpiresDays($passwordExpiresDays = null)
    {
        $this->passwordExpiresDays = new PrimitiveType($passwordExpiresDays);
        $this->passwordExpiresDays->setElementName('passwordExpiresDays');
        return $this;
    }

    /**
     * 
     * @return int $passwordExpiresDays
     */
    public function getPasswordExpiresDays()
    {
        return ($this->passwordExpiresDays)
            ? $this->passwordExpiresDays->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserDomain($userDomain = null)
    {
        $this->userDomain = ($userDomain InstanceOf NetAddress)
             ? $userDomain
             : new NetAddress($userDomain);
        $this->userDomain->setElementName('userDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userDomain
     */
    public function getUserDomain()
    {
        return ($this->userDomain)
            ? $this->userDomain->getElementValue()
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
}
