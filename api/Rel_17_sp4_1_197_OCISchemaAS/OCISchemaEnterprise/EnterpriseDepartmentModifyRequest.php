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
    public    $name                   = __CLASS__;
    protected $enterpriseId           = null;
    protected $departmentName         = null;
    protected $newDepartmentName      = null;
    protected $newParentDepartmentKey = null;

    public function __construct(
         $enterpriseId,
         $departmentName,
         $newDepartmentName = null,
          $newParentDepartmentKey = null
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setDepartmentName($departmentName);
        $this->setNewDepartmentName($newDepartmentName);
        $this->setNewParentDepartmentKey($newParentDepartmentKey);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getEnterpriseId()
    {
        return (!$this->enterpriseId) ?: $this->enterpriseId->getValue();
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function getDepartmentName()
    {
        return (!$this->departmentName) ?: $this->departmentName->getValue();
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function setNewDepartmentName($newDepartmentName = null)
    {
        $this->newDepartmentName = ($newDepartmentName InstanceOf DepartmentName)
             ? $newDepartmentName
             : new DepartmentName($newDepartmentName);
    }

    /**
     * Department name. This is only the name of the department itself, not the full path name
     *         of the department and all its parents.
     */
    public function getNewDepartmentName()
    {
        return (!$this->newDepartmentName) ?: $this->newDepartmentName->getValue();
    }

    /**
     * Uniquely identifies a department defined within an enterprise.
     *         To uniquely identify an enterprise department, we must know the department name and which
     *         enterprise contains the department.
     */
    public function setNewParentDepartmentKey(EnterpriseDepartmentKey $newParentDepartmentKey = null)
    {
        $this->newParentDepartmentKey =  $newParentDepartmentKey;
    }

    /**
     * Uniquely identifies a department defined within an enterprise.
     *         To uniquely identify an enterprise department, we must know the department name and which
     *         enterprise contains the department.
     */
    public function getNewParentDepartmentKey()
    {
        return (!$this->newParentDepartmentKey) ?: $this->newParentDepartmentKey->getValue();
    }
}
