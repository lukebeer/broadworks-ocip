<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskDeleteResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $trunkGroupKey = null;
    protected $taskName      = null;

    public function __construct(
          $trunkGroupKey,
         $taskName
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setTaskName($taskName);
    }

    /**
     * @return GroupTrunkGroupUserCreationTaskDeleteResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        $this->trunkGroupKey =  $trunkGroupKey;
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->getValue();
    }

    /**
     * The name of a Trunk Group User Creation Task.
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
    }

    /**
     * The name of a Trunk Group User Creation Task.
     */
    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->getValue();
    }
}
