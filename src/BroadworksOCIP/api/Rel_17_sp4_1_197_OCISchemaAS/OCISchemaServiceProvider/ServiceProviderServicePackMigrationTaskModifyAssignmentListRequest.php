<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementServicePackNameList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Replace the list of services and packs to be assigned to users during the service pack migration.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest';
    protected $serviceProviderId;
    protected $taskName;
    protected $userServiceNameList;
    protected $servicePackNameList;

    public function __construct(
         $serviceProviderId = '',
         $taskName = '',
         $userServiceNameList = null,
         $servicePackNameList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
        $this->taskName->setElementName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName)
            ? $this->taskName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserServiceNameList(ReplacementUserServiceList $userServiceNameList = null)
    {
        $this->userServiceNameList = ($userServiceNameList InstanceOf ReplacementUserServiceList)
             ? $userServiceNameList
             : new ReplacementUserServiceList($userServiceNameList);
        $this->userServiceNameList->setElementName('userServiceNameList');
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
        $this->servicePackNameList->setElementName('servicePackNameList');
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
