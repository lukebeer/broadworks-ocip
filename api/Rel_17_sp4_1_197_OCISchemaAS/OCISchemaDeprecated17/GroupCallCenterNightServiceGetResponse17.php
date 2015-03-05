<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterNightServiceGetRequest17.
 */
class GroupCallCenterNightServiceGetResponse17 extends ComplexType implements ComplexInterface
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
             CallCenterAnnouncementURLList $audioUrlList=null,
             CallCenterAnnouncementDescriptionList $audioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList=null,
             $videoMessageSelection,
             CallCenterAnnouncementURLList $videoUrlList=null,
             CallCenterAnnouncementDescriptionList $videoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList=null,
             $manualAnnouncementMode,
             $manualAudioMessageSelection,
             CallCenterAnnouncementURLList $manualAudioUrlList=null,
             CallCenterAnnouncementDescriptionList $manualAudioFileList=null,
             CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList=null,
             $manualVideoMessageSelection,
             CallCenterAnnouncementURLList $manualVideoUrlList=null,
             CallCenterAnnouncementDescriptionList $manualVideoFileList=null,
             CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList=null
    ) {
        $this->action                       = new CallCenterScheduledServiceAction($action);
        $this->businessHours                = new ScheduleName($businessHours);
        $this->forceNightService            = $forceNightService;
        $this->allowManualOverrideViaFAC    = $allowManualOverrideViaFAC;
        $this->transferPhoneNumber          = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        $this->audioMessageSelection        = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                 = $audioUrlList;
        $this->audioFileList                = $audioFileList;
        $this->audioMediaTypeList           = $audioMediaTypeList;
        $this->videoMessageSelection        = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                 = $videoUrlList;
        $this->videoFileList                = $videoFileList;
        $this->videoMediaTypeList           = $videoMediaTypeList;
        $this->manualAnnouncementMode       = new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAudioMessageSelection  = new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioUrlList           = $manualAudioUrlList;
        $this->manualAudioFileList          = $manualAudioFileList;
        $this->manualAudioMediaTypeList     = $manualAudioMediaTypeList;
        $this->manualVideoMessageSelection  = new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoUrlList           = $manualVideoUrlList;
        $this->manualVideoFileList          = $manualVideoFileList;
        $this->manualVideoMediaTypeList     = $manualVideoMediaTypeList;
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

    public function setAudioUrlList($audioUrlList)
    {
        $audioUrlList and $this->audioUrlList = new CallCenterAnnouncementURLList($audioUrlList);
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList($audioFileList)
    {
        $audioFileList and $this->audioFileList = new CallCenterAnnouncementDescriptionList($audioFileList);
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setAudioMediaTypeList($audioMediaTypeList)
    {
        $audioMediaTypeList and $this->audioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
    }

    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList($videoUrlList)
    {
        $videoUrlList and $this->videoUrlList = new CallCenterAnnouncementURLList($videoUrlList);
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList($videoFileList)
    {
        $videoFileList and $this->videoFileList = new CallCenterAnnouncementDescriptionList($videoFileList);
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }

    public function setVideoMediaTypeList($videoMediaTypeList)
    {
        $videoMediaTypeList and $this->videoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
    }

    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->value();
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

    public function setManualAudioUrlList($manualAudioUrlList)
    {
        $manualAudioUrlList and $this->manualAudioUrlList = new CallCenterAnnouncementURLList($manualAudioUrlList);
    }

    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->value();
    }

    public function setManualAudioFileList($manualAudioFileList)
    {
        $manualAudioFileList and $this->manualAudioFileList = new CallCenterAnnouncementDescriptionList($manualAudioFileList);
    }

    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->value();
    }

    public function setManualAudioMediaTypeList($manualAudioMediaTypeList)
    {
        $manualAudioMediaTypeList and $this->manualAudioMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($manualAudioMediaTypeList);
    }

    public function getManualAudioMediaTypeList()
    {
        return (!$this->manualAudioMediaTypeList) ?: $this->manualAudioMediaTypeList->value();
    }

    public function setManualVideoMessageSelection($manualVideoMessageSelection)
    {
        $manualVideoMessageSelection and $this->manualVideoMessageSelection = new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->value();
    }

    public function setManualVideoUrlList($manualVideoUrlList)
    {
        $manualVideoUrlList and $this->manualVideoUrlList = new CallCenterAnnouncementURLList($manualVideoUrlList);
    }

    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->value();
    }

    public function setManualVideoFileList($manualVideoFileList)
    {
        $manualVideoFileList and $this->manualVideoFileList = new CallCenterAnnouncementDescriptionList($manualVideoFileList);
    }

    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->value();
    }

    public function setManualVideoMediaTypeList($manualVideoMediaTypeList)
    {
        $manualVideoMediaTypeList and $this->manualVideoMediaTypeList = new CallCenterAnnouncementMediaFileTypeList($manualVideoMediaTypeList);
    }

    public function getManualVideoMediaTypeList()
    {
        return (!$this->manualVideoMediaTypeList) ?: $this->manualVideoMediaTypeList->value();
    }
}
