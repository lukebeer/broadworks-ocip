<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterManualNightServiceAnnouncementMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterScheduledServiceAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's night service settings.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterNightServiceModifyRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                         = 'GroupCallCenterNightServiceModifyRequest17sp1';
    protected $serviceUserId                = null;
    protected $action                       = null;
    protected $businessHours                = null;
    protected $forceNightService            = null;
    protected $allowManualOverrideViaFAC    = null;
    protected $transferPhoneNumber          = null;
    protected $playAnnouncementBeforeAction = null;
    protected $audioMessageSelection        = null;
    protected $audioUrlList                 = null;
    protected $audioFileList                = null;
    protected $videoMessageSelection        = null;
    protected $videoUrlList                 = null;
    protected $videoFileList                = null;
    protected $manualAnnouncementMode       = null;
    protected $manualAudioMessageSelection  = null;
    protected $manualAudioUrlList           = null;
    protected $manualAudioFileList          = null;
    protected $manualVideoMessageSelection  = null;
    protected $manualVideoUrlList           = null;
    protected $manualVideoFileList          = null;

    public function __construct(
         $serviceUserId,
         $action = null,
         TimeSchedule $businessHours = null,
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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        if (!$action) return $this;
        $this->action = ($action InstanceOf CallCenterScheduledServiceAction)
             ? $action
             : new CallCenterScheduledServiceAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledServiceAction
     */
    public function getAction()
    {
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        if (!$businessHours) return $this;
        $this->businessHours = $businessHours;
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * 
     */
    public function setForceNightService($forceNightService = null)
    {
        if (!$forceNightService) return $this;
        $this->forceNightService = new PrimitiveType($forceNightService);
        $this->forceNightService->setName('forceNightService');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForceNightService()
    {
        return $this->forceNightService->getValue();
    }

    /**
     * 
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC = null)
    {
        if (!$allowManualOverrideViaFAC) return $this;
        $this->allowManualOverrideViaFAC = new PrimitiveType($allowManualOverrideViaFAC);
        $this->allowManualOverrideViaFAC->setName('allowManualOverrideViaFAC');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowManualOverrideViaFAC()
    {
        return $this->allowManualOverrideViaFAC->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction = null)
    {
        if (!$playAnnouncementBeforeAction) return $this;
        $this->playAnnouncementBeforeAction = new PrimitiveType($playAnnouncementBeforeAction);
        $this->playAnnouncementBeforeAction->setName('playAnnouncementBeforeAction');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return $this->playAnnouncementBeforeAction->getValue();
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        if (!$audioMessageSelection) return $this;
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
        if (!$audioUrlList) return $this;
        $this->audioUrlList = $audioUrlList;
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
        if (!$audioFileList) return $this;
        $this->audioFileList = $audioFileList;
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        if (!$videoMessageSelection) return $this;
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
        if (!$videoUrlList) return $this;
        $this->videoUrlList = $videoUrlList;
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
        if (!$videoFileList) return $this;
        $this->videoFileList = $videoFileList;
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * 
     */
    public function setManualAnnouncementMode($manualAnnouncementMode = null)
    {
        if (!$manualAnnouncementMode) return $this;
        $this->manualAnnouncementMode = ($manualAnnouncementMode InstanceOf CallCenterManualNightServiceAnnouncementMode)
             ? $manualAnnouncementMode
             : new CallCenterManualNightServiceAnnouncementMode($manualAnnouncementMode);
        $this->manualAnnouncementMode->setName('manualAnnouncementMode');
        return $this;
    }

    /**
     * 
     * @return CallCenterManualNightServiceAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return $this->manualAnnouncementMode->getValue();
    }

    /**
     * 
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection = null)
    {
        if (!$manualAudioMessageSelection) return $this;
        $this->manualAudioMessageSelection = ($manualAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualAudioMessageSelection
             : new ExtendedFileResourceSelection($manualAudioMessageSelection);
        $this->manualAudioMessageSelection->setName('manualAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getManualAudioMessageSelection()
    {
        return $this->manualAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setManualAudioUrlList(CallCenterAnnouncementURLListModify $manualAudioUrlList = null)
    {
        if (!$manualAudioUrlList) return $this;
        $this->manualAudioUrlList = $manualAudioUrlList;
        $this->manualAudioUrlList->setName('manualAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getManualAudioUrlList()
    {
        return $this->manualAudioUrlList;
    }

    /**
     * 
     */
    public function setManualAudioFileList(CallCenterAnnouncementFileListModify $manualAudioFileList = null)
    {
        if (!$manualAudioFileList) return $this;
        $this->manualAudioFileList = $manualAudioFileList;
        $this->manualAudioFileList->setName('manualAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getManualAudioFileList()
    {
        return $this->manualAudioFileList;
    }

    /**
     * 
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection = null)
    {
        if (!$manualVideoMessageSelection) return $this;
        $this->manualVideoMessageSelection = ($manualVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $manualVideoMessageSelection
             : new ExtendedFileResourceSelection($manualVideoMessageSelection);
        $this->manualVideoMessageSelection->setName('manualVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getManualVideoMessageSelection()
    {
        return $this->manualVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setManualVideoUrlList(CallCenterAnnouncementURLListModify $manualVideoUrlList = null)
    {
        if (!$manualVideoUrlList) return $this;
        $this->manualVideoUrlList = $manualVideoUrlList;
        $this->manualVideoUrlList->setName('manualVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getManualVideoUrlList()
    {
        return $this->manualVideoUrlList;
    }

    /**
     * 
     */
    public function setManualVideoFileList(CallCenterAnnouncementFileListModify $manualVideoFileList = null)
    {
        if (!$manualVideoFileList) return $this;
        $this->manualVideoFileList = $manualVideoFileList;
        $this->manualVideoFileList->setName('manualVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getManualVideoFileList()
    {
        return $this->manualVideoFileList;
    }
}
