<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupUserCreationTaskDeleteRequest';
    protected $serviceUserId;
    protected $taskName;

    public function __construct(
         $serviceUserId = '',
         $taskName = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTaskName($taskName);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
        $this->taskName->setElementName('taskName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName)
            ? $this->taskName->getElementValue()
            : null;
    }
}
