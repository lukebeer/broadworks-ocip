<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldMessageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointAdd;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Music On Hold Instance to a department.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldAddInstanceRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupMusicOnHoldAddInstanceRequest14sp4';
    protected $serviceProviderId;
    protected $groupId;
    protected $department;
    protected $isActiveDuringCallHold;
    protected $isActiveDuringCallPark;
    protected $isActiveDuringBusyCampOn;
    protected $messageSelection;
    protected $accessDeviceEndpoint;
    protected $audioFile;
    protected $videoFile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         DepartmentKey $department = '',
         $isActiveDuringCallHold = '',
         $isActiveDuringCallPark = '',
         $isActiveDuringBusyCampOn = '',
         $messageSelection = '',
         AccessDeviceEndpointAdd $accessDeviceEndpoint = null,
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        $this->isActiveDuringCallHold = new PrimitiveType($isActiveDuringCallHold);
        $this->isActiveDuringCallHold->setName('isActiveDuringCallHold');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallHold
     */
    public function getIsActiveDuringCallHold()
    {
        return ($this->isActiveDuringCallHold) ? $this->isActiveDuringCallHold->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        $this->isActiveDuringCallPark = new PrimitiveType($isActiveDuringCallPark);
        $this->isActiveDuringCallPark->setName('isActiveDuringCallPark');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallPark
     */
    public function getIsActiveDuringCallPark()
    {
        return ($this->isActiveDuringCallPark) ? $this->isActiveDuringCallPark->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        $this->isActiveDuringBusyCampOn = new PrimitiveType($isActiveDuringBusyCampOn);
        $this->isActiveDuringBusyCampOn->setName('isActiveDuringBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringBusyCampOn
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return ($this->isActiveDuringBusyCampOn) ? $this->isActiveDuringBusyCampOn->getValue() : null;
    }

    /**
     * 
     */
    public function setMessageSelection($messageSelection = null)
    {
        $this->messageSelection = ($messageSelection InstanceOf MusicOnHoldMessageSelection)
             ? $messageSelection
             : new MusicOnHoldMessageSelection($messageSelection);
        $this->messageSelection->setName('messageSelection');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldMessageSelection $messageSelection
     */
    public function getMessageSelection()
    {
        return ($this->messageSelection) ? $this->messageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointAdd)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointAdd($accessDeviceEndpoint);
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointAdd $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * 
     */
    public function setAudioFile(LabeledFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf LabeledFileResource)
             ? $audioFile
             : new LabeledFileResource($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoFile(LabeledFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf LabeledFileResource)
             ? $videoFile
             : new LabeledFileResource($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}
