<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the group.
 */
class GroupSessionAdmissionControlGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGetResponse';
    public    $name                       = __CLASS__;
    protected $restrictAggregateSessions  = null;
    protected $maxSessions                = null;
    protected $maxUserOriginatingSessions = null;
    protected $maxUserTerminatingSessions = null;
    protected $countIntraGroupSessions    = null;


    /**
     * 
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions = null)
    {
        $this->restrictAggregateSessions = (boolean) $restrictAggregateSessions;
    }

    /**
     * 
     */
    public function getRestrictAggregateSessions()
    {
        return (!$this->restrictAggregateSessions) ?: $this->restrictAggregateSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxSessions($maxSessions = null)
    {
        $this->maxSessions = ($maxSessions InstanceOf NonNegativeInt)
             ? $maxSessions
             : new NonNegativeInt($maxSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxSessions()
    {
        return (!$this->maxSessions) ?: $this->maxSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions = null)
    {
        $this->countIntraGroupSessions = (boolean) $countIntraGroupSessions;
    }

    /**
     * 
     */
    public function getCountIntraGroupSessions()
    {
        return (!$this->countIntraGroupSessions) ?: $this->countIntraGroupSessions->getValue();
    }
}