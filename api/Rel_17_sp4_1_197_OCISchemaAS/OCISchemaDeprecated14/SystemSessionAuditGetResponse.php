<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAuditIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSessionAuditGetRequest.
 *         Replaced By: SystemSessionAuditGetResponse14sp3
 */
class SystemSessionAuditGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $intervalSeconds,
             $timeoutPeriodSeconds
    ) {
        $this->isActive             = $isActive;
        $this->intervalSeconds      = $intervalSeconds;
        $this->timeoutPeriodSeconds = $timeoutPeriodSeconds;
        $this->args                 = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIntervalSeconds($intervalSeconds)
    {
        $intervalSeconds and $this->intervalSeconds = new SessionAuditIntervalSeconds($intervalSeconds);
    }

    public function getIntervalSeconds()
    {
        return (!$this->intervalSeconds) ?: $this->intervalSeconds->value();
    }

    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds)
    {
        $timeoutPeriodSeconds and $this->timeoutPeriodSeconds = new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
    }

    public function getTimeoutPeriodSeconds()
    {
        return (!$this->timeoutPeriodSeconds) ?: $this->timeoutPeriodSeconds->value();
    }
}
