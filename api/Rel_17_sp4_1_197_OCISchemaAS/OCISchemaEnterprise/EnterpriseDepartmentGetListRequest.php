<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a list of departments in an enterprise. You may request only the
 *         list of departments defined at the enterprise-level, or you may request
 *         the list of all departments in the enterprise including all the departments
 *         defined within the groups inside the enterprise.
 *         The response is either EnterpriseDepartmentGetListResponse or ErrorResponse.
 */
class EnterpriseDepartmentGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enterpriseId,
             $includeGroupDepartments
    ) {
        $this->enterpriseId            = new ServiceProviderId($enterpriseId);
        $this->includeGroupDepartments = $includeGroupDepartments;
        $this->args                    = func_get_args();
    }

    public function setEnterpriseId($enterpriseId)
    {
        $enterpriseId and $this->enterpriseId = new ServiceProviderId($enterpriseId);
    }

    public function getEnterpriseId()
    {
        return (!$this->enterpriseId) ?: $this->enterpriseId->value();
    }

    public function setIncludeGroupDepartments($includeGroupDepartments)
    {
        $includeGroupDepartments and $this->includeGroupDepartments = new xs:boolean($includeGroupDepartments);
    }

    public function getIncludeGroupDepartments()
    {
        return (!$this->includeGroupDepartments) ?: $this->includeGroupDepartments->value();
    }
}
