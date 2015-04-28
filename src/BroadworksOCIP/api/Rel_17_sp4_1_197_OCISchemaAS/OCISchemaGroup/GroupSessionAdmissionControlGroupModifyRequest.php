<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementDeviceList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupSessionAdmissionControlGroupModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $newName;
    protected $maxSession;
    protected $maxUserOriginatingSessions;
    protected $maxUserTerminatingSessions;
    protected $reservedSession;
    protected $reservedUserOriginatingSessions;
    protected $reservedUserTerminatingSessions;
    protected $becomeDefaultGroup;
    protected $countIntraSACGroupSessions;
    protected $deviceList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
         $newName = null,
         $maxSession = null,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $reservedSession = null,
         $reservedUserOriginatingSessions = null,
         $reservedUserTerminatingSessions = null,
         $becomeDefaultGroup = null,
         $countIntraSACGroupSessions = null,
         $deviceList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setMaxSession($maxSession);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setReservedSession($reservedSession);
        $this->setReservedUserOriginatingSessions($reservedUserOriginatingSessions);
        $this->setReservedUserTerminatingSessions($reservedUserTerminatingSessions);
        $this->setBecomeDefaultGroup($becomeDefaultGroup);
        $this->setCountIntraSACGroupSessions($countIntraSACGroupSessions);
        $this->setDeviceList($deviceList);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf SessionAdmissionControlGroupName)
             ? $newName
             : new SessionAdmissionControlGroupName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
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
    public function setBecomeDefaultGroup($becomeDefaultGroup = null)
    {
        $this->becomeDefaultGroup = new PrimitiveType($becomeDefaultGroup);
        $this->becomeDefaultGroup->setElementName('becomeDefaultGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultGroup
     */
    public function getBecomeDefaultGroup()
    {
        return ($this->becomeDefaultGroup)
            ? $this->becomeDefaultGroup->getElementValue()
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
    public function setDeviceList(ReplacementDeviceList $deviceList = null)
    {
        $this->deviceList = ($deviceList InstanceOf ReplacementDeviceList)
             ? $deviceList
             : new ReplacementDeviceList($deviceList);
        $this->deviceList->setElementName('deviceList');
        return $this;
    }

    /**
     * 
     * @return ReplacementDeviceList $deviceList
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }
}
