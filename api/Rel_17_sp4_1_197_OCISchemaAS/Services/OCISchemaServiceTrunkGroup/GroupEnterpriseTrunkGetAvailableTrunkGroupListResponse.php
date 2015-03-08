<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    public    $name           = __CLASS__;
    protected $trunkGroupName = null;


    /**
     * Trunk Group name.
     *         Uniquely identifies a Trunk Group within a business (or family) group.
     */
    public function setTrunkGroupName($trunkGroupName = null)
    {
        $this->trunkGroupName = ($trunkGroupName InstanceOf TrunkGroupName)
             ? $trunkGroupName
             : new TrunkGroupName($trunkGroupName);
    }

    /**
     * Trunk Group name.
     *         Uniquely identifies a Trunk Group within a business (or family) group.
     */
    public function getTrunkGroupName()
    {
        return (!$this->trunkGroupName) ?: $this->trunkGroupName->getValue();
    }
}