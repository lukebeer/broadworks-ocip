<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a group administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAdminAddRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupAdminAddRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $userId            = null;
    protected $firstName         = null;
    protected $lastName          = null;
    protected $password          = null;
    protected $language          = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $userId,
         $firstName = null,
         $lastName = null,
         $password = null,
         $language = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUserId($userId);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
        $this->setLanguage($language);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
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
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return FirstName $firstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
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
     * @return LastName $lastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return Password $password
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return $this->language->getValue();
    }
}
