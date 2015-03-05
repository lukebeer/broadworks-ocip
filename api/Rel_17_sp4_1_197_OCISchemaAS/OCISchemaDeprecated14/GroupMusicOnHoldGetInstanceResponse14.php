<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldMessageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointRead14;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupMusicOnHoldGetInstanceRequest14.
 */
class GroupMusicOnHoldGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $isActiveDuringCallHold,
             $isActiveDuringCallPark,
             $messageSelection,
             AccessDeviceEndpointRead14 $accessDeviceEndpoint=null,
             $enableVideo,
             $audioFileDescription=null,
             $videoFileDescription=null
    ) {
        $this->serviceUserId          = new UserId($serviceUserId);
        $this->isActiveDuringCallHold = $isActiveDuringCallHold;
        $this->isActiveDuringCallPark = $isActiveDuringCallPark;
        $this->messageSelection       = $messageSelection;
        $this->accessDeviceEndpoint   = $accessDeviceEndpoint;
        $this->enableVideo            = $enableVideo;
        $this->audioFileDescription   = new FileDescription($audioFileDescription);
        $this->videoFileDescription   = new FileDescription($videoFileDescription);
        $this->args                   = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $isActiveDuringCallHold and $this->isActiveDuringCallHold = new xs:boolean($isActiveDuringCallHold);
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $isActiveDuringCallPark and $this->isActiveDuringCallPark = new xs:boolean($isActiveDuringCallPark);
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setMessageSelection($messageSelection)
    {
        $messageSelection and $this->messageSelection = new MusicOnHoldMessageSelection($messageSelection);
    }

    public function getMessageSelection()
    {
        return (!$this->messageSelection) ?: $this->messageSelection->value();
    }

    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $accessDeviceEndpoint and $this->accessDeviceEndpoint = new AccessDeviceEndpointRead14($accessDeviceEndpoint);
    }

    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setAudioFileDescription($audioFileDescription)
    {
        $audioFileDescription and $this->audioFileDescription = new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setVideoFileDescription($videoFileDescription)
    {
        $videoFileDescription and $this->videoFileDescription = new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }
}
