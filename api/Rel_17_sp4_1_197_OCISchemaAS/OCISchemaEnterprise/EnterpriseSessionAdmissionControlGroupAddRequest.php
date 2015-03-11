<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = 'EnterpriseSessionAdmissionControlGroupAddRequest';
    protected $serviceProviderId               = null;
    protected $name                            = null;
    protected $maxSession                      = null;
    protected $maxUserOriginatingSessions      = null;
    protected $maxUserTerminatingSessions      = null;
    protected $reservedSession                 = null;
    protected $reservedUserOriginatingSessions = null;
    protected $reservedUserTerminatingSessions = null;
    protected $becomeDefaultGroup              = null;
    protected $countIntraSACGroupSessions      = null;
    protected $devices                         = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $maxSession,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $reservedSession,
         $reservedUserOriginatingSessions = null,
         $reservedUserTerminatingSessions = null,
         $becomeDefaultGroup,
         $countIntraSACGroupSessions,
         EnterpriseAccessDevice $devices = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setMaxSession($maxSession);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setReservedSession($reservedSession);
        $this->setReservedUserOriginatingSessions($reservedUserOriginatingSessions);
        $this->setReservedUserTerminatingSessions($reservedUserTerminatingSessions);
        $this->setBecomeDefaultGroup($becomeDefaultGroup);
        $this->setCountIntraSACGroupSessions($countIntraSACGroupSessions);
        $this->setDevices($devices);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName
     */
    public function getName()
    {
        return $this->name->getValue();
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
    public function setBecomeDefaultGroup($becomeDefaultGroup = null)
    {
        if (!$becomeDefaultGroup) return $this;
        $this->becomeDefaultGroup = new PrimitiveType($becomeDefaultGroup);
        $this->becomeDefaultGroup->setName('becomeDefaultGroup');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBecomeDefaultGroup()
    {
        return $this->becomeDefaultGroup->getValue();
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
