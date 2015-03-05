<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's forced forwarding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterForcedForwardingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $isActive=null,
             $forwardToPhoneNumber=null,
             $allowEnableViaFAC=null,
             $playAnnouncementBeforeForwarding=null,
             $audioMessageSelection=null,
             ExtendedMediaFileResource $audioFile=null,
             $videoMessageSelection=null,
             ExtendedMediaFileResource $videoFile=null
    ) {
        $this->serviceUserId                    = new UserId($serviceUserId);
        $this->isActive                         = $isActive;
        $this->forwardToPhoneNumber             = new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->allowEnableViaFAC                = $allowEnableViaFAC;
        $this->playAnnouncementBeforeForwarding = $playAnnouncementBeforeForwarding;
        $this->audioMessageSelection            = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioFile                        = $audioFile;
        $this->videoMessageSelection            = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoFile                        = $videoFile;
        $this->args                             = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setAllowEnableViaFAC($allowEnableViaFAC)
    {
        $allowEnableViaFAC and $this->allowEnableViaFAC = new xs:boolean($allowEnableViaFAC);
    }

    public function getAllowEnableViaFAC()
    {
        return (!$this->allowEnableViaFAC) ?: $this->allowEnableViaFAC->value();
    }

    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding)
    {
        $playAnnouncementBeforeForwarding and $this->playAnnouncementBeforeForwarding = new xs:boolean($playAnnouncementBeforeForwarding);
    }

    public function getPlayAnnouncementBeforeForwarding()
    {
        return (!$this->playAnnouncementBeforeForwarding) ?: $this->playAnnouncementBeforeForwarding->value();
    }

    public function setAudioMessageSelection($audioMessageSelection)
    {
        $audioMessageSelection and $this->audioMessageSelection = new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioFile($audioFile)
    {
        $audioFile and $this->audioFile = new ExtendedMediaFileResource($audioFile);
    }

    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoFile($videoFile)
    {
        $videoFile and $this->videoFile = new ExtendedMediaFileResource($videoFile);
    }

    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->value();
    }
}
