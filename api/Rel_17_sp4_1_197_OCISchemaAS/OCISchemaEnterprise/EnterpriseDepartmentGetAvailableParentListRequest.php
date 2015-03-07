<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a list of enterprise level departments in an enterprise that could be the parent of the
 *         specified department. The department itself and all its decendents are not eligible to be
 *         the parent department.
 *         The response is either EnterpriseDepartmentGetAvailableParentListResponse or ErrorResponse.
 */
class EnterpriseDepartmentGetAvailableParentListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $enterpriseId    = null;
    protected $departmentName  = null;

    public function __construct(
         $enterpriseId,
         $departmentName
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setDepartmentName($departmentName);
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
}
