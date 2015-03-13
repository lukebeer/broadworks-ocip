<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a group administrator.
 *         Since old password is not specified here, any password rule related to old password
 *         does not apply.        
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAdminModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupAdminModifyRequest';
    protected $userId    = null;
    protected $firstName = null;
    protected $lastName  = null;
    protected $password  = null;
    protected $language  = null;

    public function __construct(
         $userId,
         $firstName = null,
         $lastName = null,
         $password = null,
         $language = null
    ) {
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
