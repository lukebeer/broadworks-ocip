<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseDepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a department of an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseDepartmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $enterpriseId            = null;
    protected $departmentName          = null;
    protected $newDepartmentName       = null;
    protected $newParentDepartmentKey  = null;

    public function __construct(
         $enterpriseId,
         $departmentName,
         $newDepartmentName = null,
         EnterpriseDepartmentKey $newParentDepartmentKey = null
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setDepartmentName($departmentName);
        $this->setNewDepartmentName($newDepartmentName);
        $this->setNewParentDepartmentKey($newParentDepartmentKey);
    }

    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
    }

    public function getEnterpriseId()
    {
        return (!$this->enterpriseId) ?: $this->enterpriseId->value();
    }

    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
    }

    public function getDepartmentName()
    {
        return (!$this->departmentName) ?: $this->departmentName->value();
    }

    public function setNewDepartmentName($newDepartmentName = null)
    {
        $this->newDepartmentName = ($newDepartmentName InstanceOf DepartmentName)
             ? $newDepartmentName
             : new DepartmentName($newDepartmentName);
    }

    public function getNewDepartmentName()
    {
        return (!$this->newDepartmentName) ?: $this->newDepartmentName->value();
    }

    public function setNewParentDepartmentKey(EnterpriseDepartmentKey $newParentDepartmentKey = null)
    {
    }

    public function getNewParentDepartmentKey()
    {
        return (!$this->newParentDepartmentKey) ?: $this->newParentDepartmentKey->value();
    }
}
