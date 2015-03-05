<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaliciousCallTraceCallTypeSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserMaliciousCallTraceGetRequest.
 */
class UserMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $traceTypeSelection,
             $traceForTimePeriod,
             $traceTimePeriod=null
    ) {
        $this->isActive           = $isActive;
        $this->traceTypeSelection = $traceTypeSelection;
        $this->traceForTimePeriod = $traceForTimePeriod;
        $this->traceTimePeriod    = $traceTimePeriod;
        $this->args               = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setTraceTypeSelection($traceTypeSelection)
    {
        $traceTypeSelection and $this->traceTypeSelection = new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
    }

    public function getTraceTypeSelection()
    {
        return (!$this->traceTypeSelection) ?: $this->traceTypeSelection->value();
    }

    public function setTraceForTimePeriod($traceForTimePeriod)
    {
        $traceForTimePeriod and $this->traceForTimePeriod = new xs:boolean($traceForTimePeriod);
    }

    public function getTraceForTimePeriod()
    {
        return (!$this->traceForTimePeriod) ?: $this->traceForTimePeriod->value();
    }

    public function setTraceTimePeriod($traceTimePeriod)
    {
        $traceTimePeriod and $this->traceTimePeriod = new MaliciousCallTraceTimePeriod($traceTimePeriod);
    }

    public function getTraceTimePeriod()
    {
        return (!$this->traceTimePeriod) ?: $this->traceTimePeriod->value();
    }
}
