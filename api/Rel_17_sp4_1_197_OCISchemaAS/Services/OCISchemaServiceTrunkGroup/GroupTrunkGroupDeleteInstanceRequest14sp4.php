<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a Trunk Group Instance from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupDeleteInstanceRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TrunkGroupKey $trunkGroupKey
    ) {
        $this->trunkGroupKey = $trunkGroupKey;
        $this->args          = func_get_args();
    }

    public function setTrunkGroupKey($trunkGroupKey)
    {
        $trunkGroupKey and $this->trunkGroupKey = new TrunkGroupKey($trunkGroupKey);
    }

    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->value();
    }
}
