<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with session sudit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemSessionAuditModifyRequest14sp3
 */
class SystemSessionAuditModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $isActive              = null;
    protected $intervalSeconds       = null;
    protected $timeoutPeriodSeconds  = null;

    public function __construct(
         $isActive = null,
         $intervalSeconds = null,
         $timeoutPeriodSeconds = null
    ) {
        $this->setIsActive($isActive);
        $this->setIntervalSeconds($intervalSeconds);
        $this->setTimeoutPeriodSeconds($timeoutPeriodSeconds);
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIntervalSeconds($intervalSeconds = null)
    {
        $this->intervalSeconds = ($intervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $intervalSeconds
             : new SessionAuditIntervalSeconds($intervalSeconds);
    }

    public function getIntervalSeconds()
    {
        return (!$this->intervalSeconds) ?: $this->intervalSeconds->value();
    }

    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds = null)
    {
        $this->timeoutPeriodSeconds = ($timeoutPeriodSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $timeoutPeriodSeconds
             : new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
    }

    public function getTimeoutPeriodSeconds()
    {
        return (!$this->timeoutPeriodSeconds) ?: $this->timeoutPeriodSeconds->value();
    }
}
