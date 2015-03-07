<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterNightServiceGetRequest17sp1.
 */
class GroupCallCenterNightServiceGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $action                        = null;
    protected $businessHours                 = null;
    protected $forceNightService             = null;
    protected $allowManualOverrideViaFAC     = null;
    protected $transferPhoneNumber           = null;
    protected $playAnnouncementBeforeAction  = null;
    protected $audioMessageSelection         = null;
    protected $audioUrlList                  = null;
    protected $audioFileList                 = null;
    protected $audioMediaTypeList            = null;
    protected $videoMessageSelection         = null;
    protected $videoUrlList                  = null;
    protected $videoFileList                 = null;
    protected $videoMediaTypeList            = null;
    protected $manualAnnouncementMode        = null;
    protected $manualAudioMessageSelection   = null;
    protected $manualAudioUrlList            = null;
    protected $manualAudioFileList           = null;
    protected $manualAudioMediaTypeList      = null;
    protected $manualVideoMessageSelection   = null;
    protected $manualVideoUrlList            = null;
    protected $manualVideoFileList           = null;
    protected $manualVideoMediaTypeList      = null;


    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
    }

    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->value();
    }

    public function setForceNightService(xs:boolean $forceNightService = null)
    {
    }

    public function getForceNightService()
    {
        return (!$this->forceNightService) ?: $this->forceNightService->value();
    }

    public function setAllowManualOverrideViaFAC(xs:boolean $allowManualOverrideViaFAC = null)
    {
    }

    public function getAllowManualOverrideViaFAC()
    {
        return (!$this->allowManualOverrideViaFAC) ?: $this->allowManualOverrideViaFAC->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setPlayAnnouncementBeforeAction(xs:boolean $playAnnouncementBeforeAction = null)
    {
    }

    public function getPlayAnnouncementBeforeAction()
    {
        return (!$this->playAnnouncementBeforeAction) ?: $this->playAnnouncementBeforeAction->value();
    }

    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
    }

    public function getAudioMediaTypeList()
    {
        return (!$this->audioMediaTypeList) ?: $this->audioMediaTypeList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }

    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
    }

    public function getVideoMediaTypeList()
    {
        return (!$this->videoMediaTypeList) ?: $this->videoMediaTypeList->value();
    }

    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
    }

    public function getManualAnnouncementMode()
    {
        return (!$this->manualAnnouncementMode) ?: $this->manualAnnouncementMode->value();
    }

    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
    }

    public function getManualAudioMessageSelection()
    {
        return (!$this->manualAudioMessageSelection) ?: $this->manualAudioMessageSelection->value();
    }

    public function setManualAudioUrlList(CallCenterAnnouncementURLList $manualAudioUrlList = null)
    {
    }

    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->value();
    }

    public function setManualAudioFileList(CallCenterAnnouncementDescriptionList $manualAudioFileList = null)
    {
    }

    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->value();
    }

    public function setManualAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList = null)
    {
    }

    public function getManualAudioMediaTypeList()
    {
        return (!$this->manualAudioMediaTypeList) ?: $this->manualAudioMediaTypeList->value();
    }

    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
    }

    public function getManualVideoMessageSelection()
    {
        return (!$this->manualVideoMessageSelection) ?: $this->manualVideoMessageSelection->value();
    }

    public function setManualVideoUrlList(CallCenterAnnouncementURLList $manualVideoUrlList = null)
    {
    }

    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->value();
    }

    public function setManualVideoFileList(CallCenterAnnouncementDescriptionList $manualVideoFileList = null)
    {
    }

    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->value();
    }

    public function setManualVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList = null)
    {
    }

    public function getManualVideoMediaTypeList()
    {
        return (!$this->manualVideoMediaTypeList) ?: $this->manualVideoMediaTypeList->value();
    }
}
