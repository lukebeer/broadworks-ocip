<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the details of a specified user creation task for a trunk group.
 *         The response is either GroupTrunkGroupUserCreationTaskGetResponse14sp4 or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskGetRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetResponse14sp4';
    public    $elementName = 'GroupTrunkGroupUserCreationTaskGetRequest14sp4';
    protected $trunkGroupKey;
    protected $taskName;

    public function __construct(
         $trunkGroupKey = '',
         $taskName = ''
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setTaskName($taskName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        $this->trunkGroupKey = ($trunkGroupKey InstanceOf TrunkGroupKey)
             ? $trunkGroupKey
             : new TrunkGroupKey($trunkGroupKey);
        $this->trunkGroupKey->setElementName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $trunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
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
