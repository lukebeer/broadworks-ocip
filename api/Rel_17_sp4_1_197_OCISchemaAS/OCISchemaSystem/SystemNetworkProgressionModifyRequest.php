<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkProgressionWaitPeriodSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with network progression.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkProgressionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive=null,
             $waitPeriodSeconds=null
    ) {
        $this->isActive          = $isActive;
        $this->waitPeriodSeconds = $waitPeriodSeconds;
        $this->args              = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setWaitPeriodSeconds($waitPeriodSeconds)
    {
        $waitPeriodSeconds and $this->waitPeriodSeconds = new NetworkProgressionWaitPeriodSeconds($waitPeriodSeconds);
    }

    public function getWaitPeriodSeconds()
    {
        return (!$this->waitPeriodSeconds) ?: $this->waitPeriodSeconds->value();
    }
}
