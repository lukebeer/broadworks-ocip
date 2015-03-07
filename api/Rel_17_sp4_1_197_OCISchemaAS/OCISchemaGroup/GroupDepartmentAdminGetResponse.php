<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupDepartmentAdminGetRequest.
 *         The response contains the group department administrators profile information.
 */
class GroupDepartmentAdminGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $departmentKey       = null;
    protected $departmentFullPath  = null;
    protected $firstName           = null;
    protected $lastName            = null;
    protected $language            = null;


    public function setDepartmentKey(GroupDepartmentKey $departmentKey = null)
    {
    }

    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->value();
    }

    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentName)
             ? $departmentFullPath
             : new DepartmentName($departmentFullPath);
    }

    public function getDepartmentFullPath()
    {
        return (!$this->departmentFullPath) ?: $this->departmentFullPath->value();
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
}
