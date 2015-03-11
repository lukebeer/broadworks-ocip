<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSessionAuditGetRequest.
 *         Replaced By: SystemSessionAuditGetResponse14sp3
 */
class SystemSessionAuditGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemSessionAuditGetResponse';
    protected $isActive             = null;
    protected $intervalSeconds      = null;
    protected $timeoutPeriodSeconds = null;

    /**
     * @return SystemSessionAuditGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setIntervalSeconds($intervalSeconds = null)
    {
        if (!$intervalSeconds) return $this;
        $this->intervalSeconds = ($intervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $intervalSeconds
             : new SessionAuditIntervalSeconds($intervalSeconds);
        $this->intervalSeconds->setName('intervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds
     */
    public function getIntervalSeconds()
    {
        return $this->intervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds = null)
    {
        if (!$timeoutPeriodSeconds) return $this;
        $this->timeoutPeriodSeconds = ($timeoutPeriodSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $timeoutPeriodSeconds
             : new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
        $this->timeoutPeriodSeconds->setName('timeoutPeriodSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds
     */
    public function getTimeoutPeriodSeconds()
    {
        return $this->timeoutPeriodSeconds->getValue();
    }
}
