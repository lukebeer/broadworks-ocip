<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskUserSelectionType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementServicePackNameList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replace the list of services and packs used to select which users will be migrated.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $taskName,
             $userSelectionType=null,
             ReplacementUserServiceList $userServiceNameList=null,
             ReplacementServicePackNameList $servicePackNameList=null
    ) {
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->taskName            = $taskName;
        $this->userSelectionType   = $userSelectionType;
        $this->userServiceNameList = $userServiceNameList;
        $this->servicePackNameList = $servicePackNameList;
        $this->args                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setTaskName($taskName)
    {
        $taskName and $this->taskName = new ServicePackMigrationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }

    public function setUserSelectionType($userSelectionType)
    {
        $userSelectionType and $this->userSelectionType = new ServicePackMigrationTaskUserSelectionType($userSelectionType);
    }

    public function getUserSelectionType()
    {
        return (!$this->userSelectionType) ?: $this->userSelectionType->value();
    }

    public function setUserServiceNameList($userServiceNameList)
    {
        $userServiceNameList and $this->userServiceNameList = new ReplacementUserServiceList($userServiceNameList);
    }

    public function getUserServiceNameList()
    {
        return (!$this->userServiceNameList) ?: $this->userServiceNameList->value();
    }

    public function setServicePackNameList($servicePackNameList)
    {
        $servicePackNameList and $this->servicePackNameList = new ReplacementServicePackNameList($servicePackNameList);
    }

    public function getServicePackNameList()
    {
        return (!$this->servicePackNameList) ?: $this->servicePackNameList->value();
    }
}
