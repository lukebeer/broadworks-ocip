<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterNightServiceGetRequest.
 */
class GroupCallCenterNightServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $action,
             $businessHours=null,
             $forceNightService,
             $allowManualOverrideViaFAC,
             $transferPhoneNumber=null,
             $playAnnouncementBeforeAction,
             $audioMessageSelection,
             $audioFileUrl=null,
             $audioFileDescription=null,
             $audioMediaType=null,
             $videoMessageSelection,
             $videoFileUrl=null,
             $videoFileDescription=null,
             $videoMediaType=null,
             $manualAnnouncementMode,
             $manualAudioMessageSelection,
             $manualAudioFileUrl=null,
             $manualAudioFileDescription=null,
             $manualAudioMediaType=null,
             $manualVideoMessageSelection,
             $manualVideoFileUrl=null,
             $manualVideoFileDescription=null,
             $manualVideoMediaType=null
    ) {
        $this->action                       = new CallCenterScheduledServiceAction($action);
        $this->businessHours                = new ScheduleName($businessHours);
        $this->forceNightService            = $forceNightService;
        $this->allowManualOverrideViaFAC    = $allowManualOverrideViaFAC;
        $this->transferPhoneNumber          = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        $this->audioMessageSelection        = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioFileUrl                 = new URL($audioFileUrl);
        $this->audioFileDescription         = new FileDescription($audioFileDescription);
        $this->audioMediaType               = new MediaFileType($audioMediaType);
        $this->videoMessageSelection        = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoFileUrl                 = new URL($videoFileUrl);
        $this->videoFileDescription         = new FileDescription($videoFileDescription);
        $this->videoMediaType               = new MediaFileType($videoMediaType);
        $this->manualAnnouncementMode       = new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAudioMessageSelection  = new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioFileUrl           = new URL($manualAudioFileUrl);
        $this->manualAudioFileDescription   = new FileDescription($manualAudioFileDescription);
        $this->manualAudioMediaType         = new MediaFileType($manualAudioMediaType);
        $this->manualVideoMessageSelection  = new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoFileUrl           = new URL($manualVideoFileUrl);
        $this->manualVideoFileDescription   = new FileDescription($manualVideoFileDescription);
        $this->manualVideoMediaType         = new MediaFileType($manualVideoMediaType);
        $this->args                         = func_get_args();
    }

    public function setAction($action)
    {
        $action and $this->action = new CallCenterScheduledServiceAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setBusinessHours($businessHours)
    {
        $businessHours and $this->businessHours = new ScheduleName($businessHours);
    }

    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->value();
    }

    public function setForceNightService($forceNightService)
    {
        $forceNightService and $this->forceNightService = new xs:boolean($forceNightService);
    }

    public function getForceNightService()
    {
        return (!$this->forceNightService) ?: $this->forceNightService->value();
    }

    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC)
    {
        $allowManualOverrideViaFAC and $this->allowManualOverrideViaFAC = new xs:boolean($allowManualOverrideViaFAC);
    }

    public function getAllowManualOverrideViaFAC()
    {
        return (!$this->allowManualOverrideViaFAC) ?: $this->allowManualOverrideViaFAC->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction)
    {
        $playAnnouncementBeforeAction and $this->playAnnouncementBeforeAction = new xs:boolean($playAnnouncementBeforeAction);
    }

    public function getPlayAnnouncementBeforeAction()
    {
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction->value();
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

    public function setManualAnnouncementMode($manualAnnouncementMode)
    {
        $manualAnnouncementMode and $this->manualAnnouncementMode = new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
    }

    public function getManualAnnouncementMode()
    {
        return (!$this->manualAnnouncementMode) ?: $this->manualAnnouncementMode->value();
    }

    public function setManualAudioMessageSelection($manualAudioMessageSelection)
    {
        $manualAudioMessageSelection and $this->manualAudioMessageSelection = new ExtendedFileResourceSelection($manualAudioMessageSelection);
    }

    public function getManualAudioMessageSelection()
    {
        return (!$this->manualAudioMessageSelection) ?: $this->manualAudioMessageSelection->value();
    }

    public function setManualAudioFileUrl($manualAudioFileUrl)
    {
        $manualAudioFileUrl and $this->manualAudioFileUrl = new URL($manualAudioFileUrl);
    }

    public function getManualAudioFileUrl()
    {
        return (!$this->manualAudioFileUrl) ?: $this->manualAudioFileUrl->value();
    }

    public function setManualAudioFileDescription($manualAudioFileDescription)
    {
        $manualAudioFileDescription and $this->manualAudioFileDescription = new FileDescription($manualAudioFileDescription);
    }

    public function getManualAudioFileDescription()
    {
        return (!$this->manualAudioFileDescription) ?: $this->manualAudioFileDescription->value();
    }

    public function setManualAudioMediaType($manualAudioMediaType)
    {
        $manualAudioMediaType and $this->manualAudioMediaType = new MediaFileType($manualAudioMediaType);
    }

    public function getManualAudioMediaType()
    {
        return (!$this->manualAudioMediaType) ?: $this->manualAudioMediaType->value();
    }

    public function setManualVideoMessageSelection($manualVideoMessageSelection)
    {
        $manualVideoMessageSelection and $this->manualVideoMessageSelection = new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->value();
    }

    public function setManualVideoFileUrl($manualVideoFileUrl)
    {
        $manualVideoFileUrl and $this->manualVideoFileUrl = new URL($manualVideoFileUrl);
    }

    public function getManualVideoFileUrl()
    {
        return (!$this->manualVideoFileUrl) ?: $this->manualVideoFileUrl->value();
    }

    public function setManualVideoFileDescription($manualVideoFileDescription)
    {
        $manualVideoFileDescription and $this->manualVideoFileDescription = new FileDescription($manualVideoFileDescription);
    }

    public function getManualVideoFileDescription()
    {
        return (!$this->manualVideoFileDescription) ?: $this->manualVideoFileDescription->value();
    }

    public function setManualVideoMediaType($manualVideoMediaType)
    {
        $manualVideoMediaType and $this->manualVideoMediaType = new MediaFileType($manualVideoMediaType);
    }

    public function getManualVideoMediaType()
    {
        return (!$this->manualVideoMediaType) ?: $this->manualVideoMediaType->value();
    }
}
