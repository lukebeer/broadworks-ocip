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
     * Response to SystemSessionAuditGetRequest.
 *         Replaced By: SystemSessionAuditGetResponse14sp3
 */
class SystemSessionAuditGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $isActive             = null;
    protected $intervalSeconds      = null;
    protected $timeoutPeriodSeconds = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Session Audit interval seconds.
     */
    public function setIntervalSeconds($intervalSeconds = null)
    {
        $this->intervalSeconds = ($intervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $intervalSeconds
             : new SessionAuditIntervalSeconds($intervalSeconds);
    }

    /**
     * Session Audit interval seconds.
     */
    public function getIntervalSeconds()
    {
        return (!$this->intervalSeconds) ?: $this->intervalSeconds->getValue();
    }

    /**
     * Session Audit timeout period seconds.
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds = null)
    {
        $this->timeoutPeriodSeconds = ($timeoutPeriodSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $timeoutPeriodSeconds
             : new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
    }

    /**
     * Session Audit timeout period seconds.
     */
    public function getTimeoutPeriodSeconds()
    {
        return (!$this->timeoutPeriodSeconds) ?: $this->timeoutPeriodSeconds->getValue();
    }
}
