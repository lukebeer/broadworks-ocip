<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a route point's night service settings.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointNightServiceModifyRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $action=null,
             TimeSchedule $businessHours=null,
             $forceNightService=null,
             $transferPhoneNumber=null,
             $playAnnouncementBeforeAction=null,
             $audioMessageSelection=null,
             CallCenterAnnouncementURLListModify $audioUrlList=null,
             CallCenterAnnouncementFileListModify $audioFileList=null,
             $videoMessageSelection=null,
             CallCenterAnnouncementURLListModify $videoUrlList=null,
             CallCenterAnnouncementFileListModify $videoFileList=null,
             $manualAnnouncementMode=null,
             $manualAudioMessageSelection=null,
             CallCenterAnnouncementURLListModify $manualAudioUrlList=null,
             CallCenterAnnouncementFileListModify $manualAudioFileList=null,
             $manualVideoMessageSelection=null,
             CallCenterAnnouncementURLListModify $manualVideoUrlList=null,
             CallCenterAnnouncementFileListModify $manualVideoFileList=null
    ) {
        $this->serviceUserId                = new UserId($serviceUserId);
        $this->action                       = new CallCenterScheduledServiceAction($action);
        $this->businessHours                = $businessHours;
        $this->forceNightService            = $forceNightService;
        $this->transferPhoneNumber          = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        $this->audioMessageSelection        = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                 = $audioUrlList;
        $this->audioFileList                = $audioFileList;
        $this->videoMessageSelection        = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                 = $videoUrlList;
        $this->videoFileList                = $videoFileList;
        $this->manualAnnouncementMode       = new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAudioMessageSelection  = new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioUrlList           = $manualAudioUrlList;
        $this->manualAudioFileList          = $manualAudioFileList;
        $this->manualVideoMessageSelection  = new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoUrlList           = $manualVideoUrlList;
        $this->manualVideoFileList          = $manualVideoFileList;
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
        $businessHours and $this->businessHours = new TimeSchedule($businessHours);
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
        $audioUrlList and $this->audioUrlList = new CallCenterAnnouncementURLListModify($audioUrlList);
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList($audioFileList)
    {
        $audioFileList and $this->audioFileList = new CallCenterAnnouncementFileListModify($audioFileList);
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
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
        $videoUrlList and $this->videoUrlList = new CallCenterAnnouncementURLListModify($videoUrlList);
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList($videoFileList)
    {
        $videoFileList and $this->videoFileList = new CallCenterAnnouncementFileListModify($videoFileList);
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
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
        $manualAudioUrlList and $this->manualAudioUrlList = new CallCenterAnnouncementURLListModify($manualAudioUrlList);
    }

    public function getManualAudioUrlList()
    {
        return (!$this->manualAudioUrlList) ?: $this->manualAudioUrlList->value();
    }

    public function setManualAudioFileList($manualAudioFileList)
    {
        $manualAudioFileList and $this->manualAudioFileList = new CallCenterAnnouncementFileListModify($manualAudioFileList);
    }

    public function getManualAudioFileList()
    {
        return (!$this->manualAudioFileList) ?: $this->manualAudioFileList->value();
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
        $manualVideoUrlList and $this->manualVideoUrlList = new CallCenterAnnouncementURLListModify($manualVideoUrlList);
    }

    public function getManualVideoUrlList()
    {
        return (!$this->manualVideoUrlList) ?: $this->manualVideoUrlList->value();
    }

    public function setManualVideoFileList($manualVideoFileList)
    {
        $manualVideoFileList and $this->manualVideoFileList = new CallCenterAnnouncementFileListModify($manualVideoFileList);
    }

    public function getManualVideoFileList()
    {
        return (!$this->manualVideoFileList) ?: $this->manualVideoFileList->value();
    }
}
