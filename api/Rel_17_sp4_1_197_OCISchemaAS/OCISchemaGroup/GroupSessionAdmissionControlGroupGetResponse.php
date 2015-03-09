<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGroupGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupSessionAdmissionControlGroupGetRequest.
 *         Returns the profile information for the session admission control group.
 */
class GroupSessionAdmissionControlGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $maxSession                      = null;
    protected $maxUserOriginatingSessions      = null;
    protected $maxUserTerminatingSessions      = null;
    protected $reservedSession                 = null;
    protected $reservedUserOriginatingSessions = null;
    protected $reservedUserTerminatingSessions = null;
    protected $defaultGroup                    = null;
    protected $countIntraSACGroupSessions      = null;
    protected $devices                         = null;

    /**
     * @return GroupSessionAdmissionControlGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Non-negative integer.
     */
    public function setMaxSession($maxSession = null)
    {
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxSession()
    {
        return (!$this->maxSession) ?: $this->maxSession->getValue();
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
     * Non-negative integer.
     */
    public function setReservedSession($reservedSession = null)
    {
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedSession()
    {
        return (!$this->reservedSession) ?: $this->reservedSession->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedUserOriginatingSessions()
    {
        return (!$this->reservedUserOriginatingSessions) ?: $this->reservedUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedUserTerminatingSessions()
    {
        return (!$this->reservedUserTerminatingSessions) ?: $this->reservedUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setDefaultGroup($defaultGroup = null)
    {
        $this->defaultGroup = (boolean) $defaultGroup;
    }

    /**
     * 
     */
    public function getDefaultGroup()
    {
        return (!$this->defaultGroup) ?: $this->defaultGroup;
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        $this->countIntraSACGroupSessions = (boolean) $countIntraSACGroupSessions;
    }

    /**
     * 
     */
    public function getCountIntraSACGroupSessions()
    {
        return (!$this->countIntraSACGroupSessions) ?: $this->countIntraSACGroupSessions;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function setDevices(AccessDevice $devices = null)
    {
        $this->devices =  $devices;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function getDevices()
    {
        return (!$this->devices) ?: $this->devices->getValue();
    }
}
