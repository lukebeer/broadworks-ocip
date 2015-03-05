<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the group.
 */
class GroupSessionAdmissionControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $restrictAggregateSessions,
             $maxSessions=null,
             $maxUserOriginatingSessions=null,
             $maxUserTerminatingSessions=null,
             $countIntraGroupSessions
    ) {
        $this->restrictAggregateSessions  = $restrictAggregateSessions;
        $this->maxSessions                = new NonNegativeInt($maxSessions);
        $this->maxUserOriginatingSessions = new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserTerminatingSessions = new NonNegativeInt($maxUserTerminatingSessions);
        $this->countIntraGroupSessions    = $countIntraGroupSessions;
        $this->args                       = func_get_args();
    }

    public function setRestrictAggregateSessions($restrictAggregateSessions)
    {
        $restrictAggregateSessions and $this->restrictAggregateSessions = new xs:boolean($restrictAggregateSessions);
    }

    public function getRestrictAggregateSessions()
    {
        return (!$this->restrictAggregateSessions) ?: $this->restrictAggregateSessions->value();
    }

    public function setMaxSessions($maxSessions)
    {
        $maxSessions and $this->maxSessions = new NonNegativeInt($maxSessions);
    }

    public function getMaxSessions()
    {
        return (!$this->maxSessions) ?: $this->maxSessions->value();
    }

    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $maxUserOriginatingSessions and $this->maxUserOriginatingSessions = new NonNegativeInt($maxUserOriginatingSessions);
    }

    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->value();
    }

    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $maxUserTerminatingSessions and $this->maxUserTerminatingSessions = new NonNegativeInt($maxUserTerminatingSessions);
    }

    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->value();
    }

    public function setCountIntraGroupSessions($countIntraGroupSessions)
    {
        $countIntraGroupSessions and $this->countIntraGroupSessions = new xs:boolean($countIntraGroupSessions);
    }

    public function getCountIntraGroupSessions()
    {
        return (!$this->countIntraGroupSessions) ?: $this->countIntraGroupSessions->value();
    }
}
