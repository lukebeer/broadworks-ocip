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
    public    $elementName = 'EnterpriseSessionAdmissionControlGroupGetResponse';
    protected $maxSession;
    protected $maxUserOriginatingSessions;
    protected $maxUserTerminatingSessions;
    protected $reservedSession;
    protected $reservedUserOriginatingSessions;
    protected $reservedUserTerminatingSessions;
    protected $defaultGroup;
    protected $countIntraSACGroupSessions;
    protected $devices;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseSessionAdmissionControlGroupGetResponse $response
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
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
        $this->maxSession->setElementName('maxSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxSession
     */
    public function getMaxSession()
    {
        return ($this->maxSession)
            ? $this->maxSession->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setElementName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserOriginatingSessions
     */
    public function getMaxUserOriginatingSessions()
    {
        return ($this->maxUserOriginatingSessions)
            ? $this->maxUserOriginatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setElementName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserTerminatingSessions
     */
    public function getMaxUserTerminatingSessions()
    {
        return ($this->maxUserTerminatingSessions)
            ? $this->maxUserTerminatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReservedSession($reservedSession = null)
    {
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
        $this->reservedSession->setElementName('reservedSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedSession
     */
    public function getReservedSession()
    {
        return ($this->reservedSession)
            ? $this->reservedSession->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserOriginatingSessions->setElementName('reservedUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserOriginatingSessions
     */
    public function getReservedUserOriginatingSessions()
    {
        return ($this->reservedUserOriginatingSessions)
            ? $this->reservedUserOriginatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
        $this->reservedUserTerminatingSessions->setElementName('reservedUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserTerminatingSessions
     */
    public function getReservedUserTerminatingSessions()
    {
        return ($this->reservedUserTerminatingSessions)
            ? $this->reservedUserTerminatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultGroup($defaultGroup = null)
    {
        $this->defaultGroup = new PrimitiveType($defaultGroup);
        $this->defaultGroup->setElementName('defaultGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultGroup
     */
    public function getDefaultGroup()
    {
        return ($this->defaultGroup)
            ? $this->defaultGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        $this->countIntraSACGroupSessions = new PrimitiveType($countIntraSACGroupSessions);
        $this->countIntraSACGroupSessions->setElementName('countIntraSACGroupSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $countIntraSACGroupSessions
     */
    public function getCountIntraSACGroupSessions()
    {
        return ($this->countIntraSACGroupSessions)
            ? $this->countIntraSACGroupSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDevices(EnterpriseAccessDevice $devices = null)
    {
        $this->devices = ($devices InstanceOf EnterpriseAccessDevice)
             ? $devices
             : new EnterpriseAccessDevice($devices);
        $this->devices->setElementName('devices');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAccessDevice $devices
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
