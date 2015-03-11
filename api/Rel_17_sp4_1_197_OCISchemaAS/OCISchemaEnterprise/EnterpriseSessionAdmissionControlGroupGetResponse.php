<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseSessionAdmissionControlGroupGetRequest.
 *         Returns the profile information for the session admission control group.
 */
class EnterpriseSessionAdmissionControlGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = 'EnterpriseSessionAdmissionControlGroupGetResponse';
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
     * @return EnterpriseSessionAdmissionControlGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxSession($maxSession = null)
    {
        if (!$maxSession) return $this;
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
        $this->maxSession->setName('maxSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getMaxSession()
    {
        return $this->maxSession->getValue();
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        if (!$maxUserOriginatingSessions) return $this;
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        if (!$maxUserTerminatingSessions) return $this;
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setReservedSession($reservedSession = null)
    {
        if (!$reservedSession) return $this;
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
        $this->reservedSession->setName('reservedSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getReservedSession()
    {
        return $this->reservedSession->getValue();
    }

    /**
     * 
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        if (!$reservedUserOriginatingSessions) return $this;
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserOriginatingSessions->setName('reservedUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions->getValue();
    }

    /**
     * 
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        if (!$reservedUserTerminatingSessions) return $this;
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
        $this->reservedUserTerminatingSessions->setName('reservedUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setDefaultGroup($defaultGroup = null)
    {
        if (!$defaultGroup) return $this;
        $this->defaultGroup = new PrimitiveType($defaultGroup);
        $this->defaultGroup->setName('defaultGroup');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultGroup()
    {
        return $this->defaultGroup->getValue();
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        if (!$countIntraSACGroupSessions) return $this;
        $this->countIntraSACGroupSessions = new PrimitiveType($countIntraSACGroupSessions);
        $this->countIntraSACGroupSessions->setName('countIntraSACGroupSessions');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getCountIntraSACGroupSessions()
    {
        return $this->countIntraSACGroupSessions->getValue();
    }

    /**
     * 
     */
    public function setDevices(EnterpriseAccessDevice $devices = null)
    {
        if (!$devices) return $this;
        $this->devices = $devices;
        $this->devices->setName('devices');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAccessDevice
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
