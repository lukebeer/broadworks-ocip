<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the details of a specified user creation task for a trunk group.
 *         The response is either GroupTrunkGroupUserCreationTaskGetResponse14sp4 or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskGetRequest14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetResponse14sp4';
    public    $name          = __CLASS__;
    protected $trunkGroupKey = null;
    protected $taskName      = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey,
         $taskName
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setTaskName($taskName);
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        $this->trunkGroupKey = TrunkGroupKey $trunkGroupKey;
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