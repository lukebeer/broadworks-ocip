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
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $department                = null;
    protected $isActiveDuringCallHold    = null;
    protected $isActiveDuringCallPark    = null;
    protected $isActiveDuringBusyCampOn  = null;
    protected $messageSelection          = null;
    protected $accessDeviceEndpoint      = null;
    protected $audioFile                 = null;
    protected $videoFile                 = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         DepartmentKey $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         $messageSelection = null,
         AccessDeviceEndpointModify $accessDeviceEndpoint = null,
         LabeledFileResource $audioFile = null,
         LabeledFileResource $videoFile = null
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

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDepartment(DepartmentKey $department = null)
    {
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setIsActiveDuringCallHold(xs:boolean $isActiveDuringCallHold = null)
    {
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark(xs:boolean $isActiveDuringCallPark = null)
    {
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setIsActiveDuringBusyCampOn(xs:boolean $isActiveDuringBusyCampOn = null)
    {
    }

    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->value();
    }

    public function setMessageSelection($messageSelection = null)
    {
        $this->messageSelection = ($messageSelection InstanceOf MusicOnHoldMessageSelection)
             ? $messageSelection
             : new MusicOnHoldMessageSelection($messageSelection);
    }

    public function getMessageSelection()
    {
        return (!$this->messageSelection) ?: $this->messageSelection->value();
    }

    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
    }

    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->value();
    }

    public function setAudioFile(LabeledFileResource $audioFile = null)
    {
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoFile(LabeledFileResource $videoFile = null)
    {
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }
}
