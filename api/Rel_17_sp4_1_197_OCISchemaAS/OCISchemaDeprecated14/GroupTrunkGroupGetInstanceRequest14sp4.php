<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse14sp4 or an ErrorResponse.
 */
class GroupTrunkGroupGetInstanceRequest14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetInstanceResponse14sp4';
    public    $name          = __CLASS__;
    protected $trunkGroupKey = null;

    public function __construct(
          $trunkGroupKey
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
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
}
