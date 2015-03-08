<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldMessageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldModifyInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $department               = null;
    protected $isActiveDuringCallHold   = null;
    protected $isActiveDuringCallPark   = null;
    protected $isActiveDuringBusyCampOn = null;
    protected $messageSelection         = null;
    protected $accessDeviceEndpoint     = null;
    protected $audioFile                = null;
    protected $videoFile                = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
          $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         $messageSelection = null,
          $accessDeviceEndpoint = null,
          $audioFile = null,
          $videoFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartment($department);
        $this->setIsActiveDuringCallHold($isActiveDuringCallHold);
        $this->setIsActiveDuringCallPark($isActiveDuringCallPark);
        $this->setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn);
        $this->setMessageSelection($messageSelection);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
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
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->getValue();
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
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->getValue();
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
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->getValue();
    }

    /**
     * Music On Hold Message Selection.
     */
    public function setMessageSelection($messageSelection = null)
    {
        $this->messageSelection = ($messageSelection InstanceOf MusicOnHoldMessageSelection)
             ? $messageSelection
             : new MusicOnHoldMessageSelection($messageSelection);
    }

    /**
     * Music On Hold Message Selection.
     */
    public function getMessageSelection()
    {
        return (!$this->messageSelection) ?: $this->messageSelection->getValue();
    }

    /**
     * Access device end point used in the context of modify.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint =  $accessDeviceEndpoint;
    }

    /**
     * Access device end point used in the context of modify.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setAudioFile(LabeledFileResource $audioFile = null)
    {
        $this->audioFile =  $audioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setVideoFile(LabeledFileResource $videoFile = null)
    {
        $this->videoFile =  $videoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->getValue();
    }
}
