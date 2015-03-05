<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterForcedForwardingGetRequest.
 */
class GroupCallCenterForcedForwardingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $forwardToPhoneNumber=null,
             $allowEnableViaFAC,
             $playAnnouncementBeforeForwarding,
             $audioMessageSelection,
             $audioFileUrl=null,
             $audioFileDescription=null,
             $audioMediaType=null,
             $videoMessageSelection,
             $videoFileUrl=null,
             $videoFileDescription=null,
             $videoMediaType=null
    ) {
        $this->isActive                         = $isActive;
        $this->forwardToPhoneNumber             = new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->allowEnableViaFAC                = $allowEnableViaFAC;
        $this->playAnnouncementBeforeForwarding = $playAnnouncementBeforeForwarding;
        $this->audioMessageSelection            = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioFileUrl                     = new URL($audioFileUrl);
        $this->audioFileDescription             = new FileDescription($audioFileDescription);
        $this->audioMediaType                   = new MediaFileType($audioMediaType);
        $this->videoMessageSelection            = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoFileUrl                     = new URL($videoFileUrl);
        $this->videoFileDescription             = new FileDescription($videoFileDescription);
        $this->videoMediaType                   = new MediaFileType($videoMediaType);
        $this->args                             = func_get_args();
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

    public function setAudioFileUrl($audioFileUrl)
    {
        $audioFileUrl and $this->audioFileUrl = new URL($audioFileUrl);
    }

    public function getAudioFileUrl()
    {
        return (!$this->audioFileUrl) ?: $this->audioFileUrl->value();
    }

    public function setAudioFileDescription($audioFileDescription)
    {
        $audioFileDescription and $this->audioFileDescription = new FileDescription($audioFileDescription);
    }

    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->value();
    }

    public function setAudioMediaType($audioMediaType)
    {
        $audioMediaType and $this->audioMediaType = new MediaFileType($audioMediaType);
    }

    public function getAudioMediaType()
    {
        return (!$this->audioMediaType) ?: $this->audioMediaType->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoFileUrl($videoFileUrl)
    {
        $videoFileUrl and $this->videoFileUrl = new URL($videoFileUrl);
    }

    public function getVideoFileUrl()
    {
        return (!$this->videoFileUrl) ?: $this->videoFileUrl->value();
    }

    public function setVideoFileDescription($videoFileDescription)
    {
        $videoFileDescription and $this->videoFileDescription = new FileDescription($videoFileDescription);
    }

    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->value();
    }

    public function setVideoMediaType($videoMediaType)
    {
        $videoMediaType and $this->videoMediaType = new MediaFileType($videoMediaType);
    }

    public function getVideoMediaType()
    {
        return (!$this->videoMediaType) ?: $this->videoMediaType->value();
    }
}
