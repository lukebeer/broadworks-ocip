<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskUserSelectionType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementServicePackNameList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replace the list of services and packs used to select which users will be migrated.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest';
    protected $serviceProviderId;
    protected $taskName;
    protected $userSelectionType;
    protected $userServiceNameList;
    protected $servicePackNameList;

    public function __construct(
         $serviceProviderId = '',
         $taskName = '',
         $userSelectionType = null,
         $userServiceNameList = null,
         $servicePackNameList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
        $this->setUserSelectionType($userSelectionType);
        $this->setUserServiceNameList($userServiceNameList);
        $this->setServicePackNameList($servicePackNameList);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName) ? $this->taskName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserSelectionType($userSelectionType = null)
    {
        $this->userSelectionType = ($userSelectionType InstanceOf ServicePackMigrationTaskUserSelectionType)
             ? $userSelectionType
             : new ServicePackMigrationTaskUserSelectionType($userSelectionType);
        $this->userSelectionType->setName('userSelectionType');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskUserSelectionType $userSelectionType
     */
    public function getUserSelectionType()
    {
        return ($this->userSelectionType) ? $this->userSelectionType->getValue() : null;
    }

    /**
     * 
     */
    public function setUserServiceNameList(ReplacementUserServiceList $userServiceNameList = null)
    {
        $this->userServiceNameList = ($userServiceNameList InstanceOf ReplacementUserServiceList)
             ? $userServiceNameList
             : new ReplacementUserServiceList($userServiceNameList);
        $this->userServiceNameList->setName('userServiceNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserServiceList $userServiceNameList
     */
    public function getUserServiceNameList()
    {
        return $this->userServiceNameList;
    }

    /**
     * 
     */
    public function setServicePackNameList(ReplacementServicePackNameList $servicePackNameList = null)
    {
        $this->servicePackNameList = ($servicePackNameList InstanceOf ReplacementServicePackNameList)
             ? $servicePackNameList
             : new ReplacementServicePackNameList($servicePackNameList);
        $this->servicePackNameList->setName('servicePackNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementServicePackNameList $servicePackNameList
     */
    public function getServicePackNameList()
    {
        return $this->servicePackNameList;
    }
}
