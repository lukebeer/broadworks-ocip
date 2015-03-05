<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemAdminType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a system or provisioning administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAdminAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $firstName=null,
             $lastName=null,
             $password,
             $language=null,
             $adminType,
             $readOnly
    ) {
        $this->userId    = new UserId($userId);
        $this->firstName = new FirstName($firstName);
        $this->lastName  = new LastName($lastName);
        $this->password  = new Password($password);
        $this->language  = new Language($language);
        $this->adminType = new SystemAdminType($adminType);
        $this->readOnly  = $readOnly;
        $this->args      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setFirstName($firstName)
    {
        $firstName and $this->firstName = new FirstName($firstName);
    }

    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->value();
    }

    public function setLastName($lastName)
    {
        $lastName and $this->lastName = new LastName($lastName);
    }

    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->value();
    }

    public function setPassword($password)
    {
        $password and $this->password = new Password($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }

    public function setLanguage($language)
    {
        $language and $this->language = new Language($language);
    }

    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->value();
    }

    public function setAdminType($adminType)
    {
        $adminType and $this->adminType = new SystemAdminType($adminType);
    }

    public function getAdminType()
    {
        return (!$this->adminType) ?: $this->adminType->value();
    }

    public function setReadOnly($readOnly)
    {
        $readOnly and $this->readOnly = new xs:boolean($readOnly);
    }

    public function getReadOnly()
    {
        return (!$this->readOnly) ?: $this->readOnly->value();
    }
}
