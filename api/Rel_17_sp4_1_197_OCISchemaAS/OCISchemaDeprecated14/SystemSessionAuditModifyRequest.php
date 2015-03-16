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
 * Modify the system level data associated with session sudit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemSessionAuditModifyRequest14sp3
 */
class SystemSessionAuditModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSessionAuditModifyRequest';
    protected $isActive;
    protected $intervalSeconds;
    protected $timeoutPeriodSeconds;

    public function __construct(
         $isActive = null,
         $intervalSeconds = null,
         $timeoutPeriodSeconds = null
    ) {
        $this->setIsActive($isActive);
        $this->setIntervalSeconds($intervalSeconds);
        $this->setTimeoutPeriodSeconds($timeoutPeriodSeconds);
    }

    /**
     * @return mixed $response
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
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setIntervalSeconds($intervalSeconds = null)
    {
        $this->intervalSeconds = ($intervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $intervalSeconds
             : new SessionAuditIntervalSeconds($intervalSeconds);
        $this->intervalSeconds->setName('intervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds $intervalSeconds
     */
    public function getIntervalSeconds()
    {
        return ($this->intervalSeconds) ? $this->intervalSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds = null)
    {
        $this->timeoutPeriodSeconds = ($timeoutPeriodSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $timeoutPeriodSeconds
             : new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
        $this->timeoutPeriodSeconds->setName('timeoutPeriodSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds $timeoutPeriodSeconds
     */
    public function getTimeoutPeriodSeconds()
    {
        return ($this->timeoutPeriodSeconds) ? $this->timeoutPeriodSeconds->getValue() : null;
    }
}
