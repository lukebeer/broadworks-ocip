<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementServicePackNameList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Replace the list of services and packs to be removed from users during the service pack migration.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyRemovalListRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $taskName            = null;
    protected $userServiceNameList = null;
    protected $servicePackNameList = null;

    public function __construct(
         $serviceProviderId,
         $taskName,
         ReplacementUserServiceList $userServiceNameList = null,
         ReplacementServicePackNameList $servicePackNameList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
        $this->setUserServiceNameList($userServiceNameList);
        $this->setServicePackNameList($servicePackNameList);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Service pack migration task name.
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
    }

    /**
     * Service pack migration task name.
     */
    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->getValue();
    }

    /**
     * A list of user services that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setUserServiceNameList(ReplacementUserServiceList $userServiceNameList = null)
    {
        $this->userServiceNameList = ReplacementUserServiceList $userServiceNameList;
    }

    /**
     * A list of user services that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getUserServiceNameList()
    {
        return (!$this->userServiceNameList) ?: $this->userServiceNameList->getValue();
    }

    /**
     * A list of service packs that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setServicePackNameList(ReplacementServicePackNameList $servicePackNameList = null)
    {
        $this->servicePackNameList = ReplacementServicePackNameList $servicePackNameList;
    }

    /**
     * A list of service packs that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getServicePackNameList()
    {
        return (!$this->servicePackNameList) ?: $this->servicePackNameList->getValue();
    }
}
