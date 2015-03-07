<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseSessionAdmissionControlGroupGetRequest.
 *         Returns the profile information for the session admission control group.
 */
class EnterpriseSessionAdmissionControlGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $maxSession                       = null;
    protected $maxUserOriginatingSessions       = null;
    protected $maxUserTerminatingSessions       = null;
    protected $reservedSession                  = null;
    protected $reservedUserOriginatingSessions  = null;
    protected $reservedUserTerminatingSessions  = null;
    protected $defaultGroup                     = null;
    protected $countIntraSACGroupSessions       = null;
    protected $devices                          = null;


    public function setMaxSession($maxSession = null)
    {
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
    }

    public function getMaxSession()
    {
        return (!$this->maxSession) ?: $this->maxSession->value();
    }

    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
    }

    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->value();
    }

    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
    }

    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->value();
    }

    public function setReservedSession($reservedSession = null)
    {
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
    }

    public function getReservedSession()
    {
        return (!$this->reservedSession) ?: $this->reservedSession->value();
    }

    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
    }

    public function getReservedUserOriginatingSessions()
    {
        return (!$this->reservedUserOriginatingSessions) ?: $this->reservedUserOriginatingSessions->value();
    }

    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
    }

    public function getReservedUserTerminatingSessions()
    {
        return (!$this->reservedUserTerminatingSessions) ?: $this->reservedUserTerminatingSessions->value();
    }

    public function setDefaultGroup(xs:boolean $defaultGroup = null)
    {
    }

    public function getDefaultGroup()
    {
        return (!$this->defaultGroup) ?: $this->defaultGroup->value();
    }

    public function setCountIntraSACGroupSessions(xs:boolean $countIntraSACGroupSessions = null)
    {
    }

    public function getCountIntraSACGroupSessions()
    {
        return (!$this->countIntraSACGroupSessions) ?: $this->countIntraSACGroupSessions->value();
    }

    public function setDevices(EnterpriseAccessDevice $devices = null)
    {
    }

    public function getDevices()
    {
        return (!$this->devices) ?: $this->devices->value();
    }
}
