<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldSourceAdd16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold\GroupMusicOnHoldAddInstanceResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Music on Hold Instance to a department.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldAddInstanceRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $serviceProviderId                  = null;
    protected $groupId                            = null;
    protected $department                         = null;
    protected $isActiveDuringCallHold             = null;
    protected $isActiveDuringCallPark             = null;
    protected $isActiveDuringBusyCampOn           = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
          $department,
         $isActiveDuringCallHold,
         $isActiveDuringCallPark,
         $isActiveDuringBusyCampOn,
          $source,
         $useAlternateSourceForInternalCalls,
          $internalSource = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartment($department);
        $this->setIsActiveDuringCallHold($isActiveDuringCallHold);
        $this->setIsActiveDuringCallPark($isActiveDuringCallPark);
        $this->setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
    }

    /**
     * @return GroupMusicOnHoldAddInstanceResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department =  $department;
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        $this->isActiveDuringCallHold = (boolean) $isActiveDuringCallHold;
    }

    /**
     * 
     */
    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        $this->isActiveDuringCallPark = (boolean) $isActiveDuringCallPark;
    }

    /**
     * 
     */
    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark;
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        $this->isActiveDuringBusyCampOn = (boolean) $isActiveDuringBusyCampOn;
    }

    /**
     * 
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setSource(MusicOnHoldSourceAdd16 $source = null)
    {
        $this->source =  $source;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getSource()
    {
        return (!$this->source) ?: $this->source->getValue();
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        $this->useAlternateSourceForInternalCalls = (boolean) $useAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setInternalSource(MusicOnHoldSourceAdd16 $internalSource = null)
    {
        $this->internalSource =  $internalSource;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->getValue();
    }
}
