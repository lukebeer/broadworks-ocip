<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemAdminType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a system or provisioning administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAdminAddRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $userId     = null;
    protected $firstName  = null;
    protected $lastName   = null;
    protected $password   = null;
    protected $language   = null;
    protected $adminType  = null;
    protected $readOnly   = null;

    public function __construct(
         $userId,
         $firstName = null,
         $lastName = null,
         $password,
         $language = null,
         $adminType,
         $readOnly
    ) {
        $this->setUserId($userId);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
        $this->setLanguage($language);
        $this->setAdminType($adminType);
        $this->setReadOnly($readOnly);
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

    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
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

    public function setAdminType($adminType = null)
    {
        $this->adminType = ($adminType InstanceOf SystemAdminType)
             ? $adminType
             : new SystemAdminType($adminType);
    }

    public function getAdminType()
    {
        return (!$this->adminType) ?: $this->adminType->value();
    }

    public function setReadOnly(xs:boolean $readOnly = null)
    {
    }

    public function getReadOnly()
    {
        return (!$this->readOnly) ?: $this->readOnly->value();
    }
}
