<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkTrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    public    $name       = __CLASS__;
    protected $trunkGroup = null;


    /**
     * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
     */
    public function setTrunkGroup(EnterpriseTrunkTrunkGroupKey $trunkGroup = null)
    {
        $this->trunkGroup = EnterpriseTrunkTrunkGroupKey $trunkGroup;
    }

    /**
     * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
     */
    public function getTrunkGroup()
    {
        return (!$this->trunkGroup) ?: $this->trunkGroup->getValue();
    }
}
