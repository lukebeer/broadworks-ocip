<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceUserId                 = null;
    protected $action                        = null;
    protected $businessHours                 = null;
    protected $forceNightService             = null;
    protected $allowManualOverrideViaFAC     = null;
    protected $transferPhoneNumber           = null;
    protected $playAnnouncementBeforeAction  = null;
    protected $audioMessageSelection         = null;
    protected $audioUrlList                  = null;
    protected $audioFileList                 = null;
    protected $videoMessageSelection         = null;
    protected $videoUrlList                  = null;
    protected $videoFileList                 = null;
    protected $manualAnnouncementMode        = null;
    protected $manualAudioMessageSelection   = null;
    protected $manualAudioUrlList            = null;
    protected $manualAudioFileList           = null;
    protected $manualVideoMessageSelection   = null;
    protected $manualVideoUrlList            = null;
    protected $manualVideoFileList           = null;

    public function __construct(
         $serviceUserId,
         $action = null,
         $businessHours = null,
         $forceNightService = null,
         $allowManualOverrideViaFAC = null,
         $transferPhoneNumber = null,
         $playAnnouncementBeforeAction = null,
         $audioMessageSelection = null,
         CallCenterAnnouncementURLListModify $audioUrlList = null,
         CallCenterAnnouncementFileListModify $audioFileList = null,
         $videoMessageSelection = null,
         CallCenterAnnouncementURLListModify $videoUrlList = null,
         CallCenterAnnouncementFileListModify $videoFileList = null,
         $manualAnnouncementMode = null,
         $manualAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $manualAudioUrlList = null,
         CallCenterAnnouncementFileListModify $manualAudioFileList = null,
         $manualVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $manualVideoUrlList = null,
         CallCenterAnnouncementFileListModify $manualVideoFileList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAction($action);
        $this->setBusinessHours($businessHours);
        $this->setForceNightService($forceNightService);
        $this->setAllowManualOverrideViaFAC($allowManualOverrideViaFAC);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
        $this->setManualAnnouncementMode($manualAnnouncementMode);
        $this->setManualAudioMessageSelection($manualAudioMessageSelection);
        $this->setManualAudioUrlList($manualAudioUrlList);
        $this->setManualAudioFileList($manualAudioFileList);
        $this->setManualVideoMessageSelection($manualVideoMessageSelection);
        $this->setManualVideoUrlList($manualVideoUrlList);
        $this->setManualVideoFileList($manualVideoFileList);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

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

    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
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

    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
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

    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
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

    public function setManualAudioUrlList(CallCenterAnnouncementURLListModify $manualAudioUrlList = null)
    {
    }

    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->value();
    }

    public function setManualAudioFileList(CallCenterAnnouncementFileListModify $manualAudioFileList = null)
    {
    }

    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->value();
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

    public function setManualVideoUrlList(CallCenterAnnouncementURLListModify $manualVideoUrlList = null)
    {
    }

    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->value();
    }

    public function setManualVideoFileList(CallCenterAnnouncementFileListModify $manualVideoFileList = null)
    {
    }

    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->value();
    }
}
