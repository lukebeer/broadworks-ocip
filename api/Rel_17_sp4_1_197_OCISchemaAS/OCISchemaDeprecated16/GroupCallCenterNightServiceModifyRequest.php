<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $action=null,
             $businessHours=null,
             $forceNightService=null,
             $allowManualOverrideViaFAC=null,
             $transferPhoneNumber=null,
             $playAnnouncementBeforeAction=null,
             $audioMessageSelection=null,
             ExtendedMediaFileResource $audioFile=null,
             $videoMessageSelection=null,
             ExtendedMediaFileResource $videoFile=null,
             $manualAnnouncementMode=null,
             $manualAudioMessageSelection=null,
             ExtendedMediaFileResource $manualAudioFile=null,
             $manualVideoMessageSelection=null,
             ExtendedMediaFileResource $manualVideoFile=null
    ) {
        $this->serviceUserId                = new UserId($serviceUserId);
        $this->action                       = new CallCenterScheduledServiceAction($action);
        $this->businessHours                = new ScheduleName($businessHours);
        $this->forceNightService            = $forceNightService;
        $this->allowManualOverrideViaFAC    = $allowManualOverrideViaFAC;
        $this->transferPhoneNumber          = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        $this->audioMessageSelection        = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioFile                    = $audioFile;
        $this->videoMessageSelection        = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoFile                    = $videoFile;
        $this->manualAnnouncementMode       = new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAudioMessageSelection  = new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioFile              = $manualAudioFile;
        $this->manualVideoMessageSelection  = new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoFile              = $manualVideoFile;
        $this->args                         = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
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

    public function setManualAudioFile($manualAudioFile)
    {
        $manualAudioFile and $this->manualAudioFile = new ExtendedMediaFileResource($manualAudioFile);
    }

    public function getManualAudioFile()
    {
        return (!$this->manualAudioFile) ?: $this->manualAudioFile->value();
    }

    public function setManualVideoMessageSelection($manualVideoMessageSelection)
    {
        $manualVideoMessageSelection and $this->manualVideoMessageSelection = new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->value();
    }

    public function setManualVideoFile($manualVideoFile)
    {
        $manualVideoFile and $this->manualVideoFile = new ExtendedMediaFileResource($manualVideoFile);
    }

    public function getManualVideoFile()
    {
        return (!$this->manualVideoFile) ?: $this->manualVideoFile->value();
    }
}
